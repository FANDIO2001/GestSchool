<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReponsibleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SpecialityController;

use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\ResponsableMiddleware;
// Route::get('/pages/classes/create', [ClasseController::class, 'create'])->name('pages.classes.create');
// Route::get('/classes/edit', [ClasseController::class, 'edit'])->name('classes.edit.test');
// Route::put('/classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::resource('cours', CourController::class);
// //Route::get('/cours', [CourController::class, 'create'])->name('cours.create');

// Route::get('/', function () {
//     return view('layouts.app');
// });



// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// middleware('auth')->
Route::get('/dashboard', function () {
    return view('layouts.components.dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/', function () {
    return view('accueil'); // Le nom de votre nouvelle vue est 'accueil'
});

//gestion des departements---------------------------
// ->middleware(['auth', RoleMiddleware::class . ':responsable'])
Route::prefix('departements')->name('departements.')->controller(DepartementController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/show', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::get('/{id}', 'destroy')->name('delete');
});

//Gestion des specialites----------------------------
// ->middleware(['auth', RoleMiddleware::class . ':responsable'])
Route::prefix('specialities')->name('specialities.')->controller(SpecialityController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

//Gestion des ssessions----------------------------
// ->middleware(['auth', RoleMiddleware::class . ':session'])
Route::prefix('sessions')->name('sessions.')->controller(SessionController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

//Gestion des classes---------------------------------
// ->middleware(['auth', RoleMiddleware::class . ':responsable'])
Route::prefix('classes')->name('classes.')->controller(ClasseController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/', 'seance')->name('index');

    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
    // Route::delete('/{id}/eleves', 'elevesParClasse')->name('eleves');
    Route::delete('/{id}/eleves', 'elevesParClasse')->name('eleves');
});

//Gestion des eleves---------------------------------

Route::prefix('students')->name('students.')->controller(StudentController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

//gestion des responsables--------------------------------------
// ->middleware(['auth', ResponsableMiddleware::class . ':proviseur'])
Route::prefix('responsibles')->name('responsibles.')->controller(ReponsibleController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

//gestion des enseignants-------------------------------------
// ->middleware(['auth', ResponsableMiddleware::class . ':CENSEUR'])
Route::prefix('teachers')->name('teachers.')->controller(TeacherController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('delete');
});

// gestion des seances de cours--------------------------------------

Route::prefix('cours')->name('cours.')->controller(CoursController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});


// gestion de l'authentification--------------------------------

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
