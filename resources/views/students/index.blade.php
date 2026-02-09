@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h1>Student List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
    </div>

    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    @if(count($students) > 0)
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}{{ $student->year_level == 1 ? 'st' : ($student->year_level == 2 ? 'nd' : ($student->year_level == 3 ? 'rd' : 'th')) }} Year</td>
                <td class="action-links">
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div style="text-align: center; padding: 40px; color: #666; font-size: 1.2em;">
        No students found. Click "Add New Student" to get started!
    </div>
    @endif
</div>
@endsection
