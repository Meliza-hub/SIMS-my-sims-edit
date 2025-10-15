@extends('layouts.app')

@section('title', 'Add Grade')
@section('heading', 'Add New Grade')

@section('content')
<a href="{{ route('grades.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">Back to Grades</a>

@if($errors->any())
<div class="bg-red-100 text-red-700 p-2 rounded mb-4">
    <ul class="list-disc pl-5">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('grades.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label for="enrollment_id" class="font-medium">Select Enrollment:</label><br>
        <select name="enrollment_id" id="enrollment_id" class="border p-2 w-full rounded" required>
            <option value="">-- Select Enrollment --</option>
            @foreach($enrollments as $enrollment)
                <option value="{{ $enrollment->id }}">
                    {{ $enrollment->student->name ?? 'N/A' }} - {{ $enrollment->course->name ?? 'N/A' }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="grade" class="font-medium">Grade:</label><br>
        <input type="text" name="grade" id="grade" class="border p-2 w-full rounded" value="{{ old('grade') }}" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Add Grade
    </button>
</form>
@endsection
