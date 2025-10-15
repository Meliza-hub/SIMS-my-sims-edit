@extends('layouts.app')

@section('title', isset($enrollment) ? 'Edit Enrollment' : 'Add Enrollment')
@section('heading', isset($enrollment) ? 'Edit Enrollment' : 'Add New Enrollment')

@section('content')
<a href="{{ route('enrollments.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">Back to Enrollments</a>

@if($errors->any())
<div class="bg-red-100 text-red-700 p-2 rounded mb-4">
    <ul class="list-disc pl-5">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ isset($enrollment) ? route('enrollments.update', $enrollment->id) : route('enrollments.store') }}" method="POST" class="space-y-4">
    @csrf
    @if(isset($enrollment)) @method('PUT') @endif

    <div>
        <label for="student_id" class="font-medium">Student:</label><br>
        <select name="student_id" id="student_id" class="border p-2 w-full rounded" required>
            <option value="">-- Select Student --</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}" {{ old('student_id', $enrollment->student_id ?? '') == $student->id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="course_id" class="font-medium">Course:</label><br>
        <select name="course_id" id="course_id" class="border p-2 w-full rounded" required>
            <option value="">-- Select Course --</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id', $enrollment->course_id ?? '') == $course->id ? 'selected' : '' }}>
                    {{ $course->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="grade" class="font-medium">Grade (optional):</label><br>
        <input type="text" name="grade" id="grade" value="{{ old('grade', $enrollment->grade ?? '') }}" class="border p-2 w-full rounded">
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        {{ isset($enrollment) ? 'Update Enrollment' : 'Save Enrollment' }}
    </button>
</form>
@endsection
