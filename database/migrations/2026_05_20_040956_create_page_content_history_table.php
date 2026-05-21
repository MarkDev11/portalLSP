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
        Schema::create('page_content_history', function (Blueprint $table) {
            $table->id();
            $table->string('contentable_type');
            $table->unsignedBigInteger('contentable_id');
            $table->string('field_name')->default('full_record');
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
            $table->foreignId('changed_by')->nullable()->constrained('users')->onDelete('set null');
            $table->string('change_reason')->nullable();
            $table->timestamps();

            // Indexes for performance and polymorphic queries
            $table->index(['contentable_type', 'contentable_id']);
            $table->index('changed_by');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_content_history');
    }
};
