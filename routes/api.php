<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('programs', ProgramController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('instructors', InstructorController::class);
Route::apiResource('enrollments', EnrollmentController::class);
Route::apiResource('grades', GradeController::class);
