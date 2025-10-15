@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1>Add Instructor</h1>
    <form action="{{ route('instructors.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Employee Number</label>
            <input type="text" name="employee_number" class="form-control" placeholder="Enter employee number" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Department</label>
            <input type="text" name="department" class="form-control" placeholder="Enter department" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button class="btn btn-success btn-custom">💾 Save</button>
    </form>
</div>
@endsection
