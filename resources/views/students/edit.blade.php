@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="card">
    <h1>Edit Student</h1>
    
    <form action="{{ url('/students/1') }}" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" value="Juan Dela Cruz" required>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" value="juan.delacruz@example.com" required>
        </div>

        <div class="form-group">
            <label for="course" class="form-label">Course</label>
            <select id="course" name="course" class="form-control" required>
                <option value="">Select a course</option>
                <option value="Computer Science" selected>Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Information Systems">Information Systems</option>
                <option value="Computer Engineering">Computer Engineering</option>
            </select>
        </div>

        <div class="form-group">
            <label for="year_level" class="form-label">Year Level</label>
            <select id="year_level" name="year_level" class="form-control" required>
                <option value="">Select year level</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year" selected>3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn btn-success">Update Student</button>
            <a href="{{ url('/students') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
