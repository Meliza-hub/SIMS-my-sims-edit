<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with('enrollment')->paginate(10);
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $enrollments = Enrollment::with(['student','course'])->get();
        return view('grades.create', compact('enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'grade' => 'required|numeric|min:1|max:5',
        ]);

        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade added successfully.');
    }

    public function edit(Grade $grade)
    {
        $enrollments = Enrollment::with(['student','course'])->get();
        return view('grades.edit', compact('grade','enrollments'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'grade' => 'required|numeric|min:1|max:5',
        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully.');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully.');
    }
}
