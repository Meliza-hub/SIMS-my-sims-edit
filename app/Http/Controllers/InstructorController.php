<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::with('user')->paginate(10);
        return view('instructors.index', compact('instructors'));
    }

    public function create()
    {
        $users = User::all();
        return view('instructors.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'employee_number' => 'required|unique:instructors',
            'department' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'         => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        ]);

        $user = User::create([
            'name'     => $validated['first_name'].' '.$validated['last_name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => 'instructor',
        ]);

        // 2️⃣ Create Instructor profile
        Instructor::create([
            'user_id'        => $user->id,
            'first_name'     => $validated['first_name'],
            'last_name'      => $validated['last_name'],
            'employee_number'=> $validated['employee_number'],
            'department'      => $validated['department'],
        ]);

        

        return redirect()->route('instructors.index')->with('success', 'Instructor added successfully.');
    }

    public function edit(Instructor $instructor)
    {
        $users = User::all();
        return view('instructors.edit', compact('instructor', 'users'));
    }

    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'employee_number' => 'required|unique:instructors,employee_number,' . $instructor->id,
            'department' => 'required',
            'email'      => 'required|email|unique:users,email,'.$instructor->user_id,
            'password'   => 'nullable|string|min:6',
        ]);

         $user = $instructor->user;
        $user->name = $validated['first_name'].' '.$validated['last_name'];
        $user->email = $validated['email'];
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }
        $user->save();

        $instructor->update([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'employee_number' => $validated['employee_number'],
        ]);

        

        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully.');
    }

    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully.');
    }
}
