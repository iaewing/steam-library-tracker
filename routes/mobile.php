<?php

use App\NativeComponents\TestScreen as TestScreenAlias;

Route::native('/', Home::class);
Route::native('/test', TestScreenAlias::class)->name('test');
