<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|unique:programs,name',
        'code' => 'required|unique:programs,code',
    ]);
        Program::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        

        return redirect()->route('programs.index')->with('success', 'Program created successfully.');
    }

    public function edit(Program $program)
    {
        return view('programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'code' => 'required|unique:programs,program_code,' . $program->id,
            'name' => 'required',
        ]);

        $program->update($request->only('name', 'code'));

        return redirect()->route('programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program deleted successfully.');
    }
}
