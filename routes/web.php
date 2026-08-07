<?php

use App\NativeComponents\Home;
use Illuminate\Support\Facades\Route;

Route::native('/', Home::class);

Route::get('/svelte', function () {
    return \Inertia\Inertia::render('Home', [
        'title' => 'Steam Library Tracker',
    ]);
});
