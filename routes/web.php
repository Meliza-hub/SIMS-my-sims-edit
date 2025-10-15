<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('students', StudentController::class);
Route::resource('programs', ProgramController::class);
Route::resource('instructors', InstructorController::class);
Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('grades', GradeController::class);
