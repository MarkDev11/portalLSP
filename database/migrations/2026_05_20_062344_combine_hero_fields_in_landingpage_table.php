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
        Schema::table('landingpage', function (Blueprint $table) {
            $table->text('hero_content')->nullable()->after('id');
            $table->dropColumn(['hero_tagline', 'hero_title', 'hero_description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('landingpage', function (Blueprint $table) {
            $table->string('hero_tagline', 255)->nullable();
            $table->text('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->dropColumn('hero_content');
        });
    }
};
