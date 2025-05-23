<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('homepage');
Route::get('/upgrades', [PublicController::class, 'upgrades'])->name('upgrades');
Route::get('/leaderboard', [PublicController::class, 'leaderboard'])->name('leaderboard');
