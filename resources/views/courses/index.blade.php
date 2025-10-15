@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary btn-custom mb-3">➕ Add Course</a>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Program</th>
                <th>Instructor</th>
                <th>Year Level</th>
                <th>Semester</th>
                <th>Credits</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->program->name }}</td>
                <td>{{ $course->instructor->user->name }}</td>
                <td>{{ $course->year_level }}</td>
                <td>{{ $course->semester }}</td>
                <td>{{ $course->credits }}</td>
                <td class="text-center">
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm btn-custom">✏️ Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-custom">🗑️ Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
