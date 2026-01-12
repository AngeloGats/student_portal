<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Student List Page
Route::get('/students', function () {
    return view('students.index');
});

// Add Student Page
Route::get('/students/create', function () {
    return view('students.create');
});

// View Student Page
Route::get('/students/{id}', function ($id) {
    return view('students.show');
});

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit');
});
