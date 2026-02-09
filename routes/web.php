<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Student CRUD Routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// API endpoint for HTML to fetch students
Route::get('/api/students', [StudentController::class, 'apiIndex']);
Route::post('/api/students', [StudentController::class, 'apiStore']);
Route::get('/api/students/{id}', [StudentController::class, 'apiShow']);
Route::put('/api/students/{id}', [StudentController::class, 'apiUpdate']);
Route::delete('/api/students/{id}', [StudentController::class, 'apiDestroy']);

// View Student Page
Route::get('/students/{id}', function ($id) {
    return view('students.show');
});

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit');
});
