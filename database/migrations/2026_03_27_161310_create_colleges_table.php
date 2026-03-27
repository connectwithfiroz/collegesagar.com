<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');
            $table->string('slug')->unique();

            // Media
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();

            // Description
            $table->longText('description')->nullable();

            // Contact Info
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();

            // Metadata
            $table->year('established_year')->nullable();

            // JSON for flexibility (AICTE, UGC, NAAC etc.)
            $table->json('approved_by')->nullable();

            // Status & Flags
            $table->boolean('is_featured')->default(false);
            $table->boolean('status')->default(true);

            $table->timestamps();

            // Indexes (important for performance)
            $table->index('name');
            $table->index('slug');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
