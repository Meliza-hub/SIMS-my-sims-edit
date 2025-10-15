@extends('layouts.app')

@section('title', 'Edit Grade')
@section('heading', 'Edit Grade')

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

<form action="{{ route('grades.update', $enrollment->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="font-medium">Student:</label><br>
        <input type="text" value="{{ $enrollment->student->name ?? 'N/A' }}" class="border p-2 w-full rounded bg-gray-100" disabled>
    </div>

    <div>
        <label class="font-medium">Course:</label><br>
        <input type="text" value="{{ $enrollment->course->name ?? 'N/A' }}" class="border p-2 w-full rounded bg-gray-100" disabled>
    </div>

    <div>
        <label for="grade" class="font-medium">Grade:</label><br>
        <input type="text" name="grade" id="grade" value="{{ old('grade', $enrollment->grade ?? '') }}" class="border p-2 w-full rounded" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Update Grade
    </button>
</form>
@endsection
