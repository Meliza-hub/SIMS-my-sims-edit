@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Edit Instructor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('instructors.update', $instructor->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control"
                       value="{{ old('first_name', $instructor->first_name) }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control"
                       value="{{ old('last_name', $instructor->last_name) }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Employee Number</label>
            <input type="text" name="employee_number" class="form-control"
                   value="{{ old('employee_number', $instructor->employee_number ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Department</label>
            <input type="text" name="department" class="form-control"
                   value="{{ old('department', $instructor->department ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ old('email', $instructor->user->email) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password (leave blank to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-success">✅ Update Instructor</button>
            <a href="{{ route('instructors.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
