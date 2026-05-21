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
        Schema::create('landingpage', function (Blueprint $table) {
            $table->id();
            
            // Hero Section
            $table->string('hero_tagline')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            
            // Tentang Section
            $table->string('tentang_tagline')->nullable();
            $table->string('tentang_title')->nullable();
            $table->text('tentang_description_1')->nullable();
            $table->text('tentang_description_2')->nullable();
            $table->string('stat_skema')->nullable();
            $table->string('stat_peserta')->nullable();
            $table->string('stat_kelulusan')->nullable();
            
            // Skema Section
            $table->string('skema_tagline')->nullable();
            $table->string('skema_title')->nullable();
            $table->text('skema_description')->nullable();
            
            // Berita Section
            $table->string('berita_tagline')->nullable();
            $table->string('berita_title')->nullable();
            
            // Kontak Section
            $table->string('kontak_tagline')->nullable();
            $table->string('kontak_title')->nullable();
            $table->text('kontak_alamat')->nullable();
            $table->string('kontak_email_1')->nullable();
            $table->string('kontak_email_2')->nullable();
            $table->string('kontak_telepon_1')->nullable();
            $table->string('kontak_telepon_2')->nullable();
            $table->string('kontak_jam_senin_jumat')->nullable();
            $table->string('kontak_jam_sabtu')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landingpage');
    }
};
