<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with(['program','instructor'])->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $programs = Program::all();
        $instructors = Instructor::all();
        return view('courses.create', compact('programs','instructors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'instructor_id' => 'required|exists:instructors,id',
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'year_level' => 'required',
            'semester' => 'required',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    public function edit(Course $course)
    {
        $programs = Program::all();
        $instructors = Instructor::all();
        return view('courses.edit', compact('course','programs','instructors'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'instructor_id' => 'required|exists:instructors,id',
            'course_code' => 'required|unique:courses,course_code,' . $course->id,
            'course_name' => 'required',
            'year_level' => 'required',
            'semester' => 'required',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
