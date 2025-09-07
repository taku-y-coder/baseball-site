<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\PlayerController;

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/stadiums/{team}', [StadiumController::class, 'index'])->name('stadiums.index');
Route::get('/players/{team}', [PlayerController::class, 'index'])->name('players.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
