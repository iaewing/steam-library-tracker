<?php

use App\Http\Controllers\GameCompletedController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::patch('/games/{game}/completed', GameCompletedController::class)->name('games.completed');
