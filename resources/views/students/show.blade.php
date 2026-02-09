@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="card">
    <h1>Student Profile</h1>
    
    <div style="margin-top: 2rem;">
        <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Full Name</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">{{ $student->name }}</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Email Address</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">{{ $student->email }}</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Course</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">{{ $student->course }}</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Year Level</label>
                <p style="font-size: 1.1rem; color: #2c3e50;">{{ $student->year_level }}{{ $student->year_level == 1 ? 'st' : ($student->year_level == 2 ? 'nd' : ($student->year_level == 3 ? 'rd' : 'th')) }} Year</p>
            </div>
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit Student</a>
        </div>
    </div>
</div>
@endsection
