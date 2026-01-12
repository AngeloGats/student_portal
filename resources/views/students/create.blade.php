@extends('layout')

@section('title', 'Add Student')

@section('content')
<div class="card">
    <h1>Add New Student</h1>
    
    <form action="{{ url('/students') }}" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter student full name" required>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter student email" required>
        </div>

        <div class="form-group">
            <label for="course" class="form-label">Course</label>
            <select id="course" name="course" class="form-control" required>
                <option value="">Select a course</option>
                <option value="Computer Science">Computer Science</option>
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
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="{{ url('/students') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
