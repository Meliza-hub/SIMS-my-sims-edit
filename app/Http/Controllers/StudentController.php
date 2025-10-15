<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['user','program'])->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
{
    $assignedUserIds = Student::pluck('user_id')->toArray();
    $users = \App\Models\User::where('role', 'student')
    ->whereNotIn('id', $assignedUserIds)
    ->get();
    $programs = \App\Models\Program::all(); // needed for program dropdown

    return view('students.create', compact('users', 'programs'));
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students',
            'program_id' => 'required|exists:programs,id',
            'year_level' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        
        $user = User::create([
        'name'     => $validated['first_name'] . ' ' . $validated['last_name'],
        'email'    => $validated['email'],
        'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
        'role'     => 'student',
    ]);

    

    // 2️⃣ Create the Student profile
    Student::create([
        'user_id' => $user->id,
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'student_number' => $validated['student_number'],
        'program_id' => $validated['program_id'],
        'year_level' => $validated['year_level'],
    ]);

        


        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function edit(Student $student)
    {
        $assignedUserIds = Student::where('id', '!=', $student->id)->pluck('user_id')->toArray();
        $users = User::where('role', 'student') 
        ->whereNotIn('id', $assignedUserIds)
        ->get();
        $programs = Program::all();
        return view('students.edit', compact('student','users','programs'));
    }

    public function update(Request $request, Student $student)
    {
         $validated = $request->validate([
        'student_number' => 'required|unique:students,student_number,' . $student->id,
        'program_id' => 'required|exists:programs,id',
        'year_level' => 'required',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $student->user_id,
        'password' => 'nullable|string|min:6',
    ]);

    // 1️⃣ Update the User account
    $user = $student->user;
    $user->name = $validated['first_name'] . ' ' . $validated['last_name'];
    $user->email = $validated['email'];

    if (!empty($validated['password'])) {
        $user->password = \Illuminate\Support\Facades\Hash::make($validated['password']);
    }

    $user->save();

    // 2️⃣ Update the Student profile
    $student->update([
        'student_number' => $validated['student_number'],
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'program_id' => $validated['program_id'],
        'year_level' => $validated['year_level'],
    ]);

    return redirect()->route('students.index')->with('success', 'Student updated successfully.');
}
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
