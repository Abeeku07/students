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
        Schema::create('courses_subjects', function (Blueprint $table) {
            
            $table->unsignedBigInteger('course_id');
           $table->foreign('course_id')->references('id')->on('courses')->restrictOnDelete;

           $table->unsignedBigInteger('subject_id');
           $table->foreign('subject_id')->references('id')->on('subjects')->restrictOnDelete;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_subjects');
    }
};
