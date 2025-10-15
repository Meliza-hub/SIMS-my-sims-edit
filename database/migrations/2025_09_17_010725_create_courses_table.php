<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('course_code')->unique();
    $table->string('name');
    $table->foreignId('program_id')->constrained()->onDelete('cascade');
    $table->foreignId('instructor_id')->constrained()->onDelete('cascade');
    $table->string('year_level');
    $table->string('semester');
    $table->integer('credits');
    $table->timestamps();
});

    }

    public function down(): void {
        Schema::dropIfExists('courses');
    }
};
