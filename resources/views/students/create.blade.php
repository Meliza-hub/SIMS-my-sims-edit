@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Add Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" class="mt-3">
        @csrf


        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Student Number</label>
            <input type="text" name="student_number" class="form-control" value="{{ old('student_number') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Program</label>
            <select name="program_id" class="form-select" required>
                <option value="">-- Select Program --</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}" {{ old('program_id') == $program->id ? 'selected' : '' }}>
                        {{ $program->code }} - {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Year Level</label>
            <select name="year_level" class="form-select" required>
                <option value="">-- Select Year Level --</option>
                @foreach(['1st Year','2nd Year','3rd Year','4th Year'] as $yl)
                    <option value="{{ $yl }}" {{ old('year_level') == $yl ? 'selected' : '' }}>{{ $yl }}</option>
                @endforeach
            </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>


        <div class="d-flex gap-2">
            <button class="btn btn-success">💾 Save Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
