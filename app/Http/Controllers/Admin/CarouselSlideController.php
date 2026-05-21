<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarouselSlide;
use App\Models\PageContentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarouselSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = CarouselSlide::query();

        // Filter by page
        if ($request->filled('page')) {
            $query->where('page', $request->page);
        }

        // Filter by active status
        if ($request->filled('is_active')) {
            $query->where('is_active', $request->is_active);
        }

        $slides = $query->orderBy('page')->orderBy('order_index')->paginate(20);

        return view('admin.carousel-slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel-slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'page' => 'required|string|max:50',
            'image_path' => 'nullable|image|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'gradient_from' => 'nullable|string|max:20',
            'gradient_to' => 'nullable|string|max:20',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        DB::beginTransaction();
        try {
            // Handle image upload
            if ($request->hasFile('image_path')) {
                $validated['image_path'] = $request->file('image_path')->store('carousel', 'public');
            } else {
                $validated['image_path'] = '';
            }

            // Create carousel slide
            $slide = CarouselSlide::create($validated);

            // Create history record
            PageContentHistory::create([
                'contentable_type' => CarouselSlide::class,
                'contentable_id' => $slide->id,
                'field_name' => 'full_record',
                'old_value' => null,
                'new_value' => $validated,
                'changed_by' => Auth::id(),
                'change_reason' => 'Carousel slide created',
            ]);

            DB::commit();

            return redirect()->route('admin.carousel-slides.index')
                ->with('success', 'Carousel slide created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to create slide: ' . $e->getMessage()])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slide = CarouselSlide::findOrFail($id);
        $history = PageContentHistory::where('contentable_type', CarouselSlide::class)
            ->where('contentable_id', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.carousel-slides.show', compact('slide', 'history'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slide = CarouselSlide::findOrFail($id);
        return view('admin.carousel-slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slide = CarouselSlide::findOrFail($id);

        $validated = $request->validate([
            'page' => 'required|string|max:50',
            'image_path' => 'nullable|image|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'gradient_from' => 'nullable|string|max:20',
            'gradient_to' => 'nullable|string|max:20',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'change_reason' => 'nullable|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            // Store old values
            $oldValues = $slide->toArray();

            // Handle image upload
            if ($request->hasFile('image_path')) {
                // Delete old image if exists
                if ($slide->image_path && Storage::disk('public')->exists($slide->image_path)) {
                    Storage::disk('public')->delete($slide->image_path);
                }
                $validated['image_path'] = $request->file('image_path')->store('carousel', 'public');
            } else {
                unset($validated['image_path']);
            }

            // Update slide
            $slide->update($validated);

            // Create history record
            PageContentHistory::create([
                'contentable_type' => CarouselSlide::class,
                'contentable_id' => $slide->id,
                'field_name' => 'full_record',
                'old_value' => $oldValues,
                'new_value' => $slide->toArray(),
                'changed_by' => Auth::id(),
                'change_reason' => $validated['change_reason'] ?? 'Carousel slide updated',
            ]);

            DB::commit();

            return redirect()->route('admin.carousel-slides.index')
                ->with('success', 'Carousel slide updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update slide: ' . $e->getMessage()])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = CarouselSlide::findOrFail($id);

        DB::beginTransaction();
        try {
            // Create history record before deletion
            PageContentHistory::create([
                'contentable_type' => CarouselSlide::class,
                'contentable_id' => $slide->id,
                'field_name' => 'full_record',
                'old_value' => $slide->toArray(),
                'new_value' => null,
                'changed_by' => Auth::id(),
                'change_reason' => 'Carousel slide deleted',
            ]);

            // Delete image if exists
            if ($slide->image_path && Storage::disk('public')->exists($slide->image_path)) {
                Storage::disk('public')->delete($slide->image_path);
            }

            $slide->delete();

            DB::commit();

            return redirect()->route('admin.carousel-slides.index')
                ->with('success', 'Carousel slide deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to delete slide: ' . $e->getMessage()]);
        }
    }

    /**
     * Reorder carousel slides.
     */
    public function reorder(Request $request)
    {
        $validated = $request->validate([
            'slides' => 'required|array',
            'slides.*.id' => 'required|exists:carousel_slides,id',
            'slides.*.order_index' => 'required|integer|min:0',
        ]);

        DB::beginTransaction();
        try {
            foreach ($validated['slides'] as $slideData) {
                CarouselSlide::where('id', $slideData['id'])
                    ->update(['order_index' => $slideData['order_index']]);
            }

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Slides reordered successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Failed to reorder slides.'], 500);
        }
    }
}
