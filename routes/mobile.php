<?php

use App\NativeComponents\TestScreen as TestScreenAlias;
use App\NativeComponents\Home;

$mobile = fn (string $path = '') => '/mobile'.($path ? '/'.ltrim($path, '/') : '');

Route::native($mobile(), Home::class);
Route::native($mobile('/test'), TestScreenAlias::class)->name('test');
