@extends('layouts.app')

@section('title', 'Grades')
@section('heading', 'Grades List')

@section('content')
<a href="{{ route('grades.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">Back to Enrollments</a>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('success') }}</div>
@endif

<table class="table-auto border-collapse border border-gray-300 w-full">
    <thead>
        <tr class="bg-gray-100">
            <th class="border border-gray-300 px-4 py-2">Enrollment ID</th>
            <th class="border border-gray-300 px-4 py-2">Student</th>
            <th class="border border-gray-300 px-4 py-2">Course</th>
            <th class="border border-gray-300 px-4 py-2">Grade</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($grades as $grade)
        <tr class="text-center">
            <td class="border border-gray-300 px-4 py-2">{{ $grade->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $grade->student->name ?? 'N/A' }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $grade->course->name ?? 'N/A' }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $grade->grade ?? 'N/A' }}</td>
            <td class="border border-gray-300 px-4 py-2">
                <a href="{{ route('grades.edit', $grades->id) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('grades.destroy', $grades->id) }}" method="POST" class="inline-block">
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">No grades available</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
