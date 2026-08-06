<?php

use App\Http\Controllers\TestController;
use App\NativeComponents\Home;
use Illuminate\Support\Facades\Route;

Route::native('/', Home::class);
