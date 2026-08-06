<?php

use App\Http\Controllers\TestController;
use App\NativeComponents\TestScreen as TestScreenAlias;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Route::native('/test', TestScreenAlias::class)->name('test');
