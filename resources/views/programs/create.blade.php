@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1>Add Program</h1>
    <form action="{{ route('programs.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="code" class="form-control" placeholder="Enter program code" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter program name" required>
        </div>
        <button class="btn btn-success btn-custom">💾 Save</button>
    </form>
</div>
@endsection
