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
            $table->text('tentang_content')->nullable()->after('tentang_title');
            $table->boolean('show_stats')->default(true)->after('tentang_content');
            $table->dropColumn(['tentang_description_1', 'tentang_description_2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('landingpage', function (Blueprint $table) {
            $table->text('tentang_description_1')->nullable();
            $table->text('tentang_description_2')->nullable();
            $table->dropColumn(['tentang_content', 'show_stats']);
        });
    }
};
