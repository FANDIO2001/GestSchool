<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controller\RegisController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TeacherController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route pour afficher le formulaire de création de classe
// Route::put('/classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('cours', CourController::class);
//Route::get('/cours', [CourController::class, 'create'])->name('cours.create');
Route::get('/classes/{classe}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
// Fichier: routes/web.php
Route::get('/classes/{classe}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
Route::get('/classes/create', [ClasseController::class, 'create'])->name('classes.create');
Route::get('/student/create', [StudentController::class,'create'])->name('student.create');
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/sessions/create', [SessionController::class, 'create'])->name('sessions.create');
Route::get('/departements/create',[DepartementController::class,'create'])->name('departements.create');
Route::get('/teashers/create',[TeacherController::class,'create'])->name('teashers.create');