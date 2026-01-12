@extends('layout')

@section('title', 'Welcome to Student Portal')

@section('content')
<div class="card">
    <h1>Welcome to the Student Portal</h1>
    
    <p style="font-size: 1.1rem; line-height: 1.6; color: #555; margin-bottom: 2rem;">
        The Student Portal is a comprehensive system designed to manage student information efficiently. 
        This portal allows administrators to add, view, edit, and manage student records with ease. 
        Track student details including their names, email addresses, courses, and year levels all in one centralized location.
    </p>

    <div style="margin-top: 2rem;">
        <h2>Getting Started</h2>
        <p style="margin-bottom: 1.5rem; color: #666;">
            Begin by viewing the complete list of students or add a new student to the system.
        </p>
        <a href="{{ url('/students') }}" class="btn btn-primary" style="font-size: 1.1rem; padding: 1rem 2rem;">
            View Student List
        </a>
    </div>

    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #eee;">
        <h2>Quick Actions</h2>
        <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <a href="{{ url('/students') }}" class="btn btn-primary">View All Students</a>
            <a href="{{ url('/students/create') }}" class="btn btn-success">Add New Student</a>
        </div>
    </div>
</div>
@endsection
