<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarouselSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = CarouselSlide::forPage('welcome')->ordered()->get();
        return view('admin.carousel.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'image' => 'required|image|mimes:jpg,jpeg|max:5120',
        ]);

        // Handle image upload with compression
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->compressAndStoreImage($request->file('image'));
        }

        CarouselSlide::create([
            'page' => 'welcome',
            'image_path' => $imagePath,
            'title' => $validated['title'],
            'order_index' => $validated['order_index'],
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel slide created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarouselSlide $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarouselSlide $carousel)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'order_index' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg|max:5120',
        ]);

        // Handle image upload with compression
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($carousel->image_path && $carousel->image_path !== 'placeholder.jpg') {
                Storage::disk('public')->delete($carousel->image_path);
            }
            $validated['image_path'] = $this->compressAndStoreImage($request->file('image'));
        }

        $carousel->update([
            'title' => $validated['title'],
            'order_index' => $validated['order_index'],
            'is_active' => $request->has('is_active'),
            'image_path' => $validated['image_path'] ?? $carousel->image_path,
        ]);

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel slide updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselSlide $carousel)
    {
        // Delete image if exists
        if ($carousel->image_path && $carousel->image_path !== 'placeholder.jpg') {
            Storage::disk('public')->delete($carousel->image_path);
        }

        $carousel->delete();

        return redirect()->route('admin.carousel.index')
            ->with('success', 'Carousel slide deleted successfully!');
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

        foreach ($validated['slides'] as $slide) {
            CarouselSlide::where('id', $slide['id'])
                ->update(['order_index' => $slide['order_index']]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Compress and store uploaded image.
     */
    private function compressAndStoreImage($file)
    {
        // Create unique filename
        $filename = time() . '_' . uniqid() . '.jpg';
        $storagePath = storage_path('app/public/carousel');
        
        // Create directory if not exists
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0755, true);
        }
        
        $fullPath = $storagePath . '/' . $filename;
        
        // Load image based on mime type
        $mimeType = $file->getMimeType();
        if ($mimeType === 'image/jpeg' || $mimeType === 'image/jpg') {
            $source = imagecreatefromjpeg($file->getPathname());
        } elseif ($mimeType === 'image/png') {
            $source = imagecreatefrompng($file->getPathname());
        } elseif ($mimeType === 'image/gif') {
            $source = imagecreatefromgif($file->getPathname());
        } elseif ($mimeType === 'image/webp') {
            $source = imagecreatefromwebp($file->getPathname());
        } else {
            throw new \Exception('Unsupported image format: ' . $mimeType);
        }
        
        if (!$source) {
            throw new \Exception('Failed to load image');
        }
        
        // Get original dimensions
        $originalWidth = imagesx($source);
        $originalHeight = imagesy($source);
        
        // Set max dimensions (1920x1080)
        $maxWidth = 1920;
        $maxHeight = 1080;
        
        // Calculate new dimensions maintaining aspect ratio
        $ratio = min($maxWidth / $originalWidth, $maxHeight / $originalHeight);
        
        // Only resize if image is larger than max dimensions
        if ($ratio < 1) {
            $newWidth = (int)($originalWidth * $ratio);
            $newHeight = (int)($originalHeight * $ratio);
        } else {
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;
        }
        
        // Create new image with calculated dimensions
        $resized = imagecreatetruecolor($newWidth, $newHeight);
        
        // Preserve transparency for better quality
        imagealphablending($resized, false);
        imagesavealpha($resized, true);
        
        // Resize image
        imagecopyresampled(
            $resized, $source,
            0, 0, 0, 0,
            $newWidth, $newHeight,
            $originalWidth, $originalHeight
        );
        
        // Save as JPG with 85% quality (good balance between size and quality)
        imagejpeg($resized, $fullPath, 85);
        
        // Free memory
        imagedestroy($source);
        imagedestroy($resized);
        
        // Return relative path for database storage
        return 'carousel/' . $filename;
    }
}
