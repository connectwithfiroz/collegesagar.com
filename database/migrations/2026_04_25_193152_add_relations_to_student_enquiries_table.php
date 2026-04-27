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
        Schema::table('student_enquiries', function (Blueprint $table) {

            $table->foreignId('college_id')->nullable()->after('id');
            $table->foreignId('course_id')->nullable()->after('college_id');
            $table->foreignId('specialization_id')->nullable()->after('course_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_enquiries', function (Blueprint $table) {
            //
        });
    }
};
