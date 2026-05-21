<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\LandingPage;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display the kontak management page with messages
     */
    public function index()
    {
        $kontak = Kontak::first();
        $landingPage = LandingPage::first();
        $messages = ContactMessage::latest()->paginate(10);
        
        // Create default kontak if doesn't exist
        if (!$kontak) {
            $kontak = new Kontak();
        }
        
        return view('admin.kontak.index', compact('kontak', 'landingPage', 'messages'));
    }
    
    /**
     * Update kontak and landing page contact info
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            // Hero Section
            'hero_eyebrow' => 'nullable|string|max:255',
            'hero_title' => 'nullable|string|max:255',
            'hero_description' => 'nullable|string',
            
            // Contact Info (sync with landing page)
            'kontak_alamat' => 'nullable|string',
            'kontak_email_1' => 'nullable|email|max:255',
            'kontak_email_2' => 'nullable|email|max:255',
            'kontak_telepon_1' => 'nullable|string|max:255',
            'kontak_telepon_2' => 'nullable|string|max:255',
            'kontak_jam_senin_jumat' => 'nullable|string|max:255',
            'kontak_jam_sabtu' => 'nullable|string|max:255',
            
            // Social Media
            'social_facebook' => 'nullable|url|max:255',
            'social_instagram' => 'nullable|url|max:255',
            'social_twitter' => 'nullable|url|max:255',
            'social_linkedin' => 'nullable|url|max:255',
            
            // Map Section
            'map_title' => 'nullable|string|max:255',
            'map_description' => 'nullable|string',
            'map_embed_url' => 'nullable|string',
            
            // Office Hours
            'office_hours_sunday' => 'nullable|string|max:255',
            
            // Form Settings
            'form_enabled' => 'nullable|boolean',
            'form_success_message' => 'nullable|string',
        ]);
        
        // Update or create Kontak record
        $kontak = Kontak::first();
        if ($kontak) {
            $kontak->update([
                'hero_eyebrow' => $validated['hero_eyebrow'],
                'hero_title' => $validated['hero_title'],
                'hero_description' => $validated['hero_description'],
                'social_facebook' => $validated['social_facebook'],
                'social_instagram' => $validated['social_instagram'],
                'social_twitter' => $validated['social_twitter'],
                'social_linkedin' => $validated['social_linkedin'],
                'map_title' => $validated['map_title'],
                'map_description' => $validated['map_description'],
                'map_embed_url' => $validated['map_embed_url'],
                'office_hours_sunday' => $validated['office_hours_sunday'],
                'form_enabled' => $request->has('form_enabled'),
                'form_success_message' => $validated['form_success_message'],
            ]);
        } else {
            Kontak::create([
                'hero_eyebrow' => $validated['hero_eyebrow'],
                'hero_title' => $validated['hero_title'],
                'hero_description' => $validated['hero_description'],
                'social_facebook' => $validated['social_facebook'],
                'social_instagram' => $validated['social_instagram'],
                'social_twitter' => $validated['social_twitter'],
                'social_linkedin' => $validated['social_linkedin'],
                'map_title' => $validated['map_title'],
                'map_description' => $validated['map_description'],
                'map_embed_url' => $validated['map_embed_url'],
                'office_hours_sunday' => $validated['office_hours_sunday'],
                'form_enabled' => $request->has('form_enabled'),
                'form_success_message' => $validated['form_success_message'],
            ]);
        }
        
        // Update Landing Page contact info (sync fields)
        $landingPage = LandingPage::first();
        if ($landingPage) {
            $landingPage->update([
                'kontak_alamat' => $validated['kontak_alamat'],
                'kontak_email_1' => $validated['kontak_email_1'],
                'kontak_email_2' => $validated['kontak_email_2'],
                'kontak_telepon_1' => $validated['kontak_telepon_1'],
                'kontak_telepon_2' => $validated['kontak_telepon_2'],
                'kontak_jam_senin_jumat' => $validated['kontak_jam_senin_jumat'],
                'kontak_jam_sabtu' => $validated['kontak_jam_sabtu'],
            ]);
        }
        
        return redirect()->route('admin.kontak.index')->with('success', 'Kontak berhasil diperbarui!');
    }
    
    /**
     * Mark a message as read
     */
    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);
        
        return response()->json(['success' => true]);
    }
    
    /**
     * Delete a message
     */
    public function deleteMessage($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();
        
        return redirect()->route('admin.kontak.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
