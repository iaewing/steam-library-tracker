<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Native\Mobile\Edge\NativeRouter;

Route::get('/', function () {
    if (
        request()->getPort() === (int) config('nativephp.server.http_port')
        && NativeRouter::isNativeRoute(config('nativephp.start_url'))
    ) {
        return redirect(config('nativephp.start_url'));
    }

    return Inertia::render('Home', [
        'title' => 'Steam Library Tracker',
    ]);
});
