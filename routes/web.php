<?php
use App\Http\Controllers\MovieController;

use Illuminate\Support\Facades\Route;

Route::get('/allmovies', [MovieController::class, 'showMovies'])->name('Allmovies');
