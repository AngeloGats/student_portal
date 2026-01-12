@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="card">
    <h1>Student Profile</h1>
    
    <div style="margin-top: 2rem;">
        <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Full Name</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">Juan Dela Cruz</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Email Address</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">juan.delacruz@example.com</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Course</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">Computer Science</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Year Level</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">3rd Year</p>
            </div>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <a href="{{ url('/students') }}" class="btn btn-primary">Back to Student List</a>
            <a href="{{ url('/students/1/edit') }}" class="btn btn-warning">Edit Student</a>
        </div>
    </div>
</div>
@endsection
