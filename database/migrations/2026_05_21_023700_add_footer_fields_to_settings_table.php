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
        Schema::table('settings', function (Blueprint $table) {
            // Site tagline
            $table->string('site_tagline')->default('Lembaga Sertifikasi Profesi')->after('site_name');
            
            // Footer description
            $table->text('footer_description')->nullable()->after('site_tagline');
            
            // Services (Layanan) - 4 services with name and URL
            $table->string('service_1_name')->default('Sertifikasi')->after('footer_description');
            $table->string('service_1_url')->nullable()->after('service_1_name');
            $table->string('service_2_name')->default('Pelatihan')->after('service_1_url');
            $table->string('service_2_url')->nullable()->after('service_2_name');
            $table->string('service_3_name')->default('Asesmen')->after('service_2_url');
            $table->string('service_3_url')->nullable()->after('service_3_name');
            $table->string('service_4_name')->default('Konsultasi')->after('service_3_url');
            $table->string('service_4_url')->nullable()->after('service_4_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'site_tagline',
                'footer_description',
                'service_1_name',
                'service_1_url',
                'service_2_name',
                'service_2_url',
                'service_3_name',
                'service_3_url',
                'service_4_name',
                'service_4_url',
            ]);
        });
    }
};
