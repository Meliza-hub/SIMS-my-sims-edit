<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS - Student Information Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { border-bottom: 2px solid #0d6efd; }
        .card { border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .btn-custom { border-radius: 8px; }
        h1, h2, h3 { font-weight: 600; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Student Information Management System</a>
        <div>
            <a class="nav-link d-inline text-white" href="{{ route('students.index') }}">Students</a>
            <a class="nav-link d-inline text-white" href="{{ route('instructors.index') }}">Instructors</a>
            <a class="nav-link d-inline text-white" href="{{ route('programs.index') }}">Programs</a>
            <a class="nav-link d-inline text-white" href="{{ route('courses.index') }}">Courses</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
