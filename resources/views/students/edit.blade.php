@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="card">
    <h1>Edit Student</h1>
    
    @if ($errors->any())
        <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
            <strong>Please fix the following errors:</strong>
            <ul style="list-style-position: inside; margin-top: 10px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
            @error('name')
                <div style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
            @error('email')
                <div style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="course" class="form-label">Course</label>
            <select id="course" name="course" class="form-control" required>
                <option value="">Select a course</option>
                <option value="Computer Science" {{ old('course', $student->course) == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                <option value="Information Technology" {{ old('course', $student->course) == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                <option value="Information Systems" {{ old('course', $student->course) == 'Information Systems' ? 'selected' : '' }}>Information Systems</option>
                <option value="Computer Engineering" {{ old('course', $student->course) == 'Computer Engineering' ? 'selected' : '' }}>Computer Engineering</option>
            </select>
            @error('course')
                <div style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="year_level" class="form-label">Year Level</label>
            <select id="year_level" name="year_level" class="form-control" required>
                <option value="">Select year level</option>
                <option value="1" {{ old('year_level', $student->year_level) == 1 ? 'selected' : '' }}>1st Year</option>
                <option value="2" {{ old('year_level', $student->year_level) == 2 ? 'selected' : '' }}>2nd Year</option>
                <option value="3" {{ old('year_level', $student->year_level) == 3 ? 'selected' : '' }}>3rd Year</option>
                <option value="4" {{ old('year_level', $student->year_level) == 4 ? 'selected' : '' }}>4th Year</option>
                <option value="5" {{ old('year_level', $student->year_level) == 5 ? 'selected' : '' }}>5th Year</option>
            </select>
            @error('year_level')
                <div style="color: #dc3545; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
            <button type="submit" class="btn btn-success">Update Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
