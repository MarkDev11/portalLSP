<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\WebsiteAnalytics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('creator')->latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'publish_mode' => 'required|in:now,schedule',
            'published_at' => 'nullable|date_format:Y-m-d\TH:i',
        ]);

        // Generate slug from title (unique)
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        // Map publish_mode to published_at
        if ($validated['publish_mode'] === 'now') {
            $validated['published_at'] = now();
        } else {
            $validated['published_at'] = $validated['published_at'] ?? null;
        }
        unset($validated['publish_mode']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $this->resizeAndCompressImage($request->file('image'), 'news', 1920, 90);
            $validated['image'] = $path;
        }

        News::create(array_merge($validated, [
            'created_by' => auth()->id(),
        ]));

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan!');
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
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'publish_mode' => 'required|in:now,schedule',
            'published_at' => 'nullable|date_format:Y-m-d\TH:i',
        ]);

        // Generate slug from title (unique)
        $validated['slug'] = $this->generateUniqueSlug($validated['title'], $news->id);

        // Map publish_mode to published_at
        if ($validated['publish_mode'] === 'now') {
            $validated['published_at'] = now();
        } else {
            $validated['published_at'] = $validated['published_at'] ?? null;
        }
        unset($validated['publish_mode']);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            // Resize, compress and store new image
            $path = $this->resizeAndCompressImage($request->file('image'), 'news', 1920, 90);
            $validated['image'] = $path;
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // Delete image if exists
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }

    /**
     * Generate a unique slug, appending -1, -2, ... on collision.
     */
    private function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;

        while (true) {
            $query = News::where('slug', $slug);
            if ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            }
            if (!$query->exists()) {
                return $slug;
            }
            $slug = $base . '-' . $i++;
        }
    }

    /**
     * Resize and compress image
     */
    private function resizeAndCompressImage($file, $folder, $maxWidth = 1920, $quality = 90)
    {
        $image = $file;
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $imagePath = storage_path('app/public/' . $folder . '/' . $imageName);

        // Create directory if not exists (idempotent, no race)
        Storage::disk('public')->makeDirectory($folder);

        // Get image info (guard against corrupt/non-image files)
        $imageInfo = @getimagesize($image->getRealPath());
        if (!$imageInfo) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'image' => 'File gambar tidak valid atau rusak.',
            ]);
        }
        $imageType = $imageInfo[2];

        // Create image resource based on type
        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image->getRealPath());
                break;
            case IMAGETYPE_PNG:
                $source = imagecreatefrompng($image->getRealPath());
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image->getRealPath());
                break;
            default:
                // If not supported, just move the file
                $image->storeAs('public/' . $folder, $imageName);
                return $folder . '/' . $imageName;
        }

        // Get original dimensions
        $width = imagesx($source);
        $height = imagesy($source);

        // Calculate new dimensions
        if ($width > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = floor($height * ($maxWidth / $width));
        } else {
            $newWidth = $width;
            $newHeight = $height;
        }

        // Create new image
        $destination = imagecreatetruecolor($newWidth, $newHeight);

        // Preserve transparency for PNG and GIF
        if ($imageType == IMAGETYPE_PNG || $imageType == IMAGETYPE_GIF) {
            imagealphablending($destination, false);
            imagesavealpha($destination, true);
            $transparent = imagecolorallocatealpha($destination, 255, 255, 255, 127);
            imagefilledrectangle($destination, 0, 0, $newWidth, $newHeight, $transparent);
        }

        // Resize
        imagecopyresampled($destination, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Save based on type
        switch ($imageType) {
            case IMAGETYPE_JPEG:
                imagejpeg($destination, $imagePath, $quality);
                break;
            case IMAGETYPE_PNG:
                imagepng($destination, $imagePath, 9 - floor($quality / 10));
                break;
            case IMAGETYPE_GIF:
                imagegif($destination, $imagePath);
                break;
        }

        // Free memory
        imagedestroy($source);
        imagedestroy($destination);

        return $folder . '/' . $imageName;
    }

    /**
     * Display published news for public
     */
    public function publicIndex(Request $request)
    {
        $query = News::whereNotNull('published_at')
            ->where('published_at', '<=', now());
        
        // Add search filter if query parameter exists
        if ($request->has('q') && $request->q) {
            $searchTerm = $request->q;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('content', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $news = $query->latest('published_at')->paginate(9);
        
        return view('berita', compact('news'));
    }

    /**
     * Display single news by slug for public
     */
    public function publicShow($slug)
    {
        $news = News::where('slug', $slug)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();
        
        // Increment view counter
        $news->incrementViews();
        
        // Track in website analytics
        WebsiteAnalytics::incrementToday('news_views');
        
        return view('berita-detail', compact('news'));
    }
}
