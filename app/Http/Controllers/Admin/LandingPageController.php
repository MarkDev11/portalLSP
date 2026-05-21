<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Show the form for editing the landing page.
     */
    public function edit()
    {
        // Get the first landing page record or create a new one
        $landingPage = LandingPage::firstOrCreate([]);
        
        return view('admin.landingpage.edit', compact('landingPage'));
    }

    /**
     * Update the landing page in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            // Hero Section
            'hero_content' => 'nullable|string',
            
            // Tentang Section
            'tentang_tagline' => 'nullable|string|max:255',
            'tentang_title' => 'nullable|string|max:255',
            'tentang_content' => 'nullable|string',
            'tentang_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'show_stats' => 'boolean',
            'stat_skema' => 'nullable|string|max:255',
            'stat_peserta' => 'nullable|string|max:255',
            'stat_kelulusan' => 'nullable|string|max:255',
            
            // Skema Section
            'skema_tagline' => 'nullable|string|max:255',
            'skema_title' => 'nullable|string|max:255',
            'skema_description' => 'nullable|string',
            
            // Berita Section
            'berita_tagline' => 'nullable|string|max:255',
            'berita_title' => 'nullable|string|max:255',
            
            // Kontak Section
            'kontak_tagline' => 'nullable|string|max:255',
            'kontak_title' => 'nullable|string|max:255',
            'kontak_alamat' => 'nullable|string',
            'kontak_email_1' => 'nullable|string|max:255',
            'kontak_email_2' => 'nullable|string|max:255',
            'kontak_telepon_1' => 'nullable|string|max:255',
            'kontak_telepon_2' => 'nullable|string|max:255',
            'kontak_jam_senin_jumat' => 'nullable|string|max:255',
            'kontak_jam_sabtu' => 'nullable|string|max:255',
        ]);

        // Handle checkbox: unchecked checkbox doesn't send value
        $validated['show_stats'] = $request->has('show_stats');

        $landingPage = LandingPage::firstOrCreate([]);

        // Handle image upload
        if ($request->hasFile('tentang_image')) {
            // Delete old image if exists
            if ($landingPage->tentang_image && \Storage::disk('public')->exists($landingPage->tentang_image)) {
                \Storage::disk('public')->delete($landingPage->tentang_image);
            }
            
            // Resize, compress and store new image
            $path = $this->resizeAndCompressImage($request->file('tentang_image'), 'landing/tentang', 1920, 90);
            $validated['tentang_image'] = $path;
        }

        $landingPage->update($validated);

        return redirect()->route('admin.landingpage.edit')
            ->with('success', 'Landing page content updated successfully!');
    }

    /**
     * Resize and compress uploaded image
     */
    private function resizeAndCompressImage($uploadedFile, $directory, $maxWidth = 1200, $quality = 80)
    {
        // Get file info
        $extension = $uploadedFile->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $storagePath = storage_path('app/public/' . $directory);
        
        // Create directory if not exists
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0755, true);
        }
        
        $fullPath = $storagePath . '/' . $filename;
        
        // Detect actual image type from file content (not extension)
        $imageInfo = getimagesize($uploadedFile->getRealPath());
        if (!$imageInfo) {
            // Not a valid image, fallback: just move the file
            $uploadedFile->move($storagePath, $filename);
            return $directory . '/' . $filename;
        }
        
        // Create image resource based on actual file type
        $imageResource = null;
        switch ($imageInfo[2]) {
            case IMAGETYPE_JPEG:
                $imageResource = imagecreatefromjpeg($uploadedFile->getRealPath());
                break;
            case IMAGETYPE_PNG:
                $imageResource = imagecreatefrompng($uploadedFile->getRealPath());
                break;
            case IMAGETYPE_GIF:
                $imageResource = imagecreatefromgif($uploadedFile->getRealPath());
                break;
            case IMAGETYPE_WEBP:
                $imageResource = imagecreatefromwebp($uploadedFile->getRealPath());
                break;
        }
        
        if (!$imageResource) {
            // Fallback: just move the file without processing
            $uploadedFile->move($storagePath, $filename);
            return $directory . '/' . $filename;
        }
        
        // Get original dimensions
        $originalWidth = imagesx($imageResource);
        $originalHeight = imagesy($imageResource);
        
        // Calculate new dimensions
        if ($originalWidth > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = (int)(($originalHeight / $originalWidth) * $maxWidth);
        } else {
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;
        }
        
        // Create new image with new dimensions
        $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
        
        // Preserve transparency for PNG and GIF
        if (in_array(strtolower($extension), ['png', 'gif'])) {
            imagealphablending($resizedImage, false);
            imagesavealpha($resizedImage, true);
            $transparent = imagecolorallocatealpha($resizedImage, 255, 255, 255, 127);
            imagefilledrectangle($resizedImage, 0, 0, $newWidth, $newHeight, $transparent);
        }
        
        // Resize image
        imagecopyresampled($resizedImage, $imageResource, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
        
        // Save compressed image
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($resizedImage, $fullPath, $quality);
                break;
            case 'png':
                imagepng($resizedImage, $fullPath, (int)(9 - ($quality / 10)));
                break;
            case 'gif':
                imagegif($resizedImage, $fullPath);
                break;
            case 'webp':
                imagewebp($resizedImage, $fullPath, $quality);
                break;
        }
        
        // Free memory
        imagedestroy($imageResource);
        imagedestroy($resizedImage);
        
        return $directory . '/' . $filename;
    }
}
