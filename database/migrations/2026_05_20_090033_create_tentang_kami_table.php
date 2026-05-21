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
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('about_title');
            $table->text('about_content');
            $table->string('license_title');
            $table->string('license_number');
            $table->text('visi_content');
            $table->json('misi_items');
            $table->string('tujuan_title');
            $table->text('tujuan_subtitle');
            $table->json('tujuan_items');
            $table->string('cta_title');
            $table->text('cta_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_kami');
    }
};
