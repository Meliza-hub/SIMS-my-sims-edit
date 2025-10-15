@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Edit Course</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $course->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Course Code</label>
            <input type="text" name="course_code" class="form-control" value="{{ old('course_code', $course->course_code ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Program</label>
            <select name="program_id" class="form-select" required>
                <option value="">-- Select Program --</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}" {{ old('program_id', $course->program_id ?? '') == $program->id ? 'selected' : '' }}>
                        {{ $program->code }} - {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Instructor</label>
            <select name="instructor_id" class="form-select" required>
                <option value="">-- Select Instructor --</option>
                @foreach($instructors as $instructor)
                    <option value="{{ $instructor->id }}" {{ old('instructor_id', $course->instructor_id ?? '') == $instructor->id ? 'selected' : '' }}>
                        {{ $instructor->user->name ?? 'N/A' }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Credits</label>
                <input type="number" name="credits" class="form-control" min="0" value="{{ old('credits', $course->credits ?? 3) }}" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Year Level</label>
                <select name="year_level" class="form-select" required>
                    <option value="">-- Select Year Level --</option>
                    @foreach(['1st Year','2nd Year','3rd Year','4th Year'] as $yl)
                        <option value="{{ $yl }}" {{ old('year_level', $course->year_level ?? '') == $yl ? 'selected' : '' }}>{{ $yl }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Semester</label>
                <select name="semester" class="form-select" required>
                    <option value="">-- Select Semester --</option>
                    @foreach(['1st Semester','2nd Semester'] as $s)
                        <option value="{{ $s }}" {{ old('semester', $course->semester ?? '') == $s ? 'selected' : '' }}>{{ $s }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-success">✅ Update Course</button>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
