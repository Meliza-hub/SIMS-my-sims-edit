@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1>Edit Program</h1>
    <form action="{{ route('programs.update', $program) }}" method="POST" class="mt-3">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="code" class="form-control" value="{{ $program->code }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $program->name }}" required>
        </div>
        <button class="btn btn-success btn-custom">✅ Update</button>
    </form>
</div>
@endsection
