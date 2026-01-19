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
                    <x-view-button :url="url('/students/1')" />
                    <x-edit-button :url="url('/students/1/edit')" />
                </td>
            </tr>
            <tr>
                <td>Maria Santos</td>
                <td>Information Technology</td>
                <td>2nd Year</td>
                <td class="action-links">
                    <x-view-button :url="url('/students/2')" />
                    <x-edit-button :url="url('/students/2/edit')" />
                </td>
            </tr>
            <tr>
                <td>Pedro Garcia</td>
                <td>Information Systems</td>
                <td>4th Year</td>
                <td class="action-links">
                    <x-view-button :url="url('/students/3')" />
                    <x-edit-button :url="url('/students/3/edit')" />
                </td>
            </tr>
            <tr>
                <td>Ana Reyes</td>
                <td>Computer Science</td>
                <td>1st Year</td>
                <td class="action-links">
                    <x-view-button :url="url('/students/4')" />
                    <x-edit-button :url="url('/students/4/edit')" />
                </td>
            </tr>
            <tr>
                <td>Carlos Mendoza</td>
                <td>Information Technology</td>
                <td>3rd Year</td>
                <td class="action-links">
                    <x-view-button :url="url('/students/5')" />
                    <x-edit-button :url="url('/students/5/edit')" />
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
