<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TournamentMatchController;
use App\Http\Controllers\ResultController;



// Galvenā lapa
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profils
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Turnīra izveide
    Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
    Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');

    // Pieprasījumi
    
    
    
});

// Turnīru pārskats un filtrēšana
Route::get('/tournaments', function (Request $request) {
    $query = \App\Models\Tournament::query();

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->has('location')) {
        $query->where('location', 'like', '%' . $request->location . '%');
    }

    $tournaments = $query->get();

    return view('tournaments.index', compact('tournaments'));
})->name('tournaments.index');

// Laravel Breeze auth
require __DIR__.'/auth.php';





Route::middleware('auth')->group(function () {
    Route::get('/my-tournaments', [TournamentController::class, 'myTournaments'])->name('tournaments.my');
    Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
    Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');
    Route::delete('/tournaments/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');
});

Route::get('/profile/tournaments', [TournamentController::class, 'myTournaments'])->name('tournaments.my');




Route::middleware(['auth'])->group(function () {
    Route::get('/profile/tournaments', [TournamentController::class, 'myTournaments'])->name('tournaments.my');
});



Route::middleware(['auth'])->group(function () {
    Route::post('/tournaments/{id}/apply', [ApplicationController::class, 'apply'])->name('applications.apply');
    Route::delete('/tournaments/{id}/cancel', [ApplicationController::class, 'cancel'])->name('applications.cancel');
});

// delete if fails!!!

Route::get('/tournaments/{tournament}/matches/create', [App\Http\Controllers\TournamentMatchController::class, 'create'])->name('matches.create');
Route::post('/tournaments/{tournament}/matches', [App\Http\Controllers\TournamentMatchController::class, 'store'])->name('matches.store');

Route::get('/matches/{match}/results/create', [App\Http\Controllers\ResultController::class, 'create'])->name('results.create');
Route::post('/matches/{match}/results', [App\Http\Controllers\ResultController::class, 'store'])->name('results.store');

// delete if fails!!!!!!!!!
Route::resource('tournaments.matches', TournamentMatchController::class);
Route::resource('matches.results', ResultController::class);


Route::get('/matches/{match}/results/create', [ResultController::class, 'create'])->name('results.create');

// save result form
Route::post('/matches/{match}/results', [ResultController::class, 'store'])->name('results.store');





