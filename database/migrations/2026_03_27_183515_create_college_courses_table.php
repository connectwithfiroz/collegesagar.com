<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('college_courses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('college_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('specialization_id')->nullable()->constrained()->nullOnDelete();

            $table->integer('fees')->nullable(); // total fees
            $table->integer('duration')->nullable(); // numeric
            $table->string('duration_type')->default('year'); // year/month

            $table->text('eligibility')->nullable();
            $table->text('admission_process')->nullable();

            $table->integer('seats')->nullable();

            $table->integer('placement_avg')->nullable();
            $table->integer('placement_highest')->nullable();

            $table->timestamps();

            $table->index(['college_id', 'course_id', 'specialization_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_courses');
    }
};
