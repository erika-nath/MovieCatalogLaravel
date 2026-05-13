<?php
use App\Http\Controllers\MovieController;

use Illuminate\Support\Facades\Route;

Route::get('/allmovies', [MovieController::class, 'showMovies'])->name('Allmovies');
Route::post('/newmovie', [MovieController::class, 'strore'])->name('movieStore');
Route::get('/movie/{id}', [MovieController::class, 'showById'])->name('movieById');