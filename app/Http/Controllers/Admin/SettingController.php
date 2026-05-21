<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class SettingController extends Controller
{
    /**
     * Display the settings form
     */
    public function index()
    {
        $setting = Setting::getSettings();
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Update the settings
     */
    public function update(Request $request)
    {
        $setting = Setting::getSettings();

        // Validation
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_tagline' => 'nullable|string|max:255',
            'footer_description' => 'nullable|string|max:1000',
            'header_color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'footer_color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'accent_color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'sidebar_color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'logo_type' => 'required|in:long,icon',
            'logo_long' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'logo_icon' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico,svg|max:1024',
            'service_1_name' => 'nullable|string|max:100',
            'service_1_url' => 'nullable|url|max:255',
            'service_2_name' => 'nullable|string|max:100',
            'service_2_url' => 'nullable|url|max:255',
            'service_3_name' => 'nullable|string|max:100',
            'service_3_url' => 'nullable|url|max:255',
            'service_4_name' => 'nullable|string|max:100',
            'service_4_url' => 'nullable|url|max:255',
        ]);

        // Handle logo_long upload
        if ($request->hasFile('logo_long')) {
            // Delete old file if exists
            if ($setting->logo_long_path && Storage::disk('public')->exists($setting->logo_long_path)) {
                Storage::disk('public')->delete($setting->logo_long_path);
            }

            // Store and compress new file (max width 800px)
            $path = $this->compressImage($request->file('logo_long'), 'logos', 800);
            $validated['logo_long_path'] = $path;
        }

        // Handle logo_icon upload
        if ($request->hasFile('logo_icon')) {
            // Delete old file if exists
            if ($setting->logo_icon_path && Storage::disk('public')->exists($setting->logo_icon_path)) {
                Storage::disk('public')->delete($setting->logo_icon_path);
            }

            // Store and compress new file (max 200x200px)
            $path = $this->compressImage($request->file('logo_icon'), 'logos', 200, 200);
            $validated['logo_icon_path'] = $path;
        }

        // Handle favicon upload
        if ($request->hasFile('favicon')) {
            // Delete old file if exists
            if ($setting->favicon_path && Storage::disk('public')->exists($setting->favicon_path)) {
                Storage::disk('public')->delete($setting->favicon_path);
            }

            // Store and compress new file (64x64px for favicon)
            $path = $this->compressImage($request->file('favicon'), 'favicon', 64, 64);
            $validated['favicon_path'] = $path;
        }

        // Update settings
        $setting->update($validated);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully!');
    }

    /**
     * Compress and resize uploaded image
     * 
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $directory
     * @param int|null $maxWidth
     * @param int|null $maxHeight
     * @return string Path to stored file
     */
    private function compressImage($file, $directory, $maxWidth = null, $maxHeight = null)
    {
        // Skip compression for SVG files (vector format)
        if (strtolower($file->getClientOriginalExtension()) === 'svg') {
            return $file->store($directory, 'public');
        }

        // Generate unique filename
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . uniqid() . '.' . $extension;
        $path = $directory . '/' . $filename;

        // Load image using Intervention Image
        $image = Image::read($file);
        
        // Resize based on parameters
        if ($maxWidth && $maxHeight) {
            // Fit within dimensions (maintain aspect ratio)
            $image->scale(width: $maxWidth, height: $maxHeight);
        } elseif ($maxWidth) {
            // Scale down to max width
            $image->scaleDown(width: $maxWidth);
        } elseif ($maxHeight) {
            // Scale down to max height
            $image->scaleDown(height: $maxHeight);
        }

        // Save optimized image to storage
        $fullPath = storage_path('app/public/' . $path);
        
        // Ensure directory exists
        $dir = dirname($fullPath);
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
        
        // Save with compression (85% quality for JPEG/PNG)
        $image->save($fullPath, quality: 85);

        return $path;
    }
}
