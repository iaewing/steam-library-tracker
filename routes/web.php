<?php

use App\NativeComponents\Home;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::native('/', Home::class);

Route::get('/svelte', function () {
    return Inertia::render('Home', [
        'title' => 'Steam Library Tracker',
    ]);
});
