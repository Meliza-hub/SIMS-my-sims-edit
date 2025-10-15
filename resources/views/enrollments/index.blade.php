@extends('layouts.app')

@section('title', 'Enrollments')
@section('heading', 'Enrollments List')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold">All Enrollments</h2>
    <a href="{{ route('enrollments.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Enrollments</a>
</div>

@if(session('success'))
    <p class="text-green-600 font-medium mb-2">{{ session('success') }}</p>
@endif

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Name</th>
            <th class="border px-4 py-2">Code</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($enrollments as $enrollment)
        <tr>
            <td class="border px-4 py-2">{{ $enrollment->id }}</td>
            <td class="border px-4 py-2">{{ $enrollment->name }}</td>
            <td class="border px-4 py-2">{{ $enrollment->code }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('enrollments.edit', $enrollments->id) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('enrollments.destroy', $enrollments->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
