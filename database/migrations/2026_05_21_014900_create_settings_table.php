<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            
            // Site Information
            $table->string('site_name', 255)->default('UBSI Portal LSP');
            
            // Color Customization (hex colors)
            $table->string('header_color', 7)->default('#1e293b'); // ink-900
            $table->string('footer_color', 7)->default('#1e293b'); // ink-900
            $table->string('accent_color', 7)->default('#2563eb'); // accent-600 (blue)
            $table->string('sidebar_color', 7)->default('#0f172a'); // darker ink
            
            // Logo Management
            $table->string('logo_long_path')->nullable(); // Long logo with text
            $table->string('logo_icon_path')->nullable(); // Icon-only logo
            $table->enum('logo_type', ['long', 'icon'])->default('long'); // Which logo to display
            
            // Favicon
            $table->string('favicon_path')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
