<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controller\RegisController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route pour afficher le formulaire de création de classe
Route::get('/pages/classes/create', [ClasseController::class, 'create'])->name('pages.classes.create');
Route::get('/classes/edit', [ClasseController::class, 'edit'])->name('classes.edit.test'); 
Route::put('/classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('cours', CourController::class);
//Route::get('/cours', [CourController::class, 'create'])->name('cours.create');

Route::get('/', function () {
    return view('welcome');
});
