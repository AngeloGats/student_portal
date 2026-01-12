@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h1>Student List</h1>
        <a href="{{ url('/students/create') }}" class="btn btn-success">Add New Student</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Dela Cruz</td>
                <td>Computer Science</td>
                <td>3rd Year</td>
                <td class="action-links">
                    <a href="{{ url('/students/1') }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ url('/students/1/edit') }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Maria Santos</td>
                <td>Information Technology</td>
                <td>2nd Year</td>
                <td class="action-links">
                    <a href="{{ url('/students/2') }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ url('/students/2/edit') }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Pedro Garcia</td>
                <td>Information Systems</td>
                <td>4th Year</td>
                <td class="action-links">
                    <a href="{{ url('/students/3') }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ url('/students/3/edit') }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Ana Reyes</td>
                <td>Computer Science</td>
                <td>1st Year</td>
                <td class="action-links">
                    <a href="{{ url('/students/4') }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ url('/students/4/edit') }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Carlos Mendoza</td>
                <td>Information Technology</td>
                <td>3rd Year</td>
                <td class="action-links">
                    <a href="{{ url('/students/5') }}" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">View</a>
                    <a href="{{ url('/students/5/edit') }}" class="btn btn-warning" style="padding: 0.5rem 1rem; font-size: 0.9rem;">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
