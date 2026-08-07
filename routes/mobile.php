<?php

use App\NativeComponents\TestScreen as TestScreenAlias;

Route::native('/test', TestScreenAlias::class)->name('test');
