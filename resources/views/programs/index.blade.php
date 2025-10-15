@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Programs</h1>
    <a href="{{ route('programs.create') }}" class="btn btn-primary btn-custom mb-3">➕ Add Program</a>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <tr>
                <td>{{ $program->id }}</td>
                <td>{{ $program->code }}</td>
                <td>{{ $program->name }}</td>
                <td class="text-center">
                    <a href="{{ route('programs.edit', $program) }}" class="btn btn-warning btn-sm btn-custom">✏️ Edit</a>
                    <form action="{{ route('programs.destroy', $program) }}" method="POST" class="d-inline">
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
