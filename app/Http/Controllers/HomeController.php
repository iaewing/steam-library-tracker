<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Inertia\Inertia;
use Native\Mobile\Edge\NativeRouter;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $this->mobileEntryPoint();

        $games = Game::query()->get();

        return Inertia::render('Home', [
            'title' => 'Steam Library Tracker',
            'games' => $games->toArray(),
        ]);
    }

    private function mobileEntryPoint()
    {
        if (
            request()->getPort() === (int)config('nativephp.server.http_port')
            && NativeRouter::isNativeRoute(config('nativephp.start_url'))
        ) {
            return redirect(config('nativephp.start_url'));
        }
    }
}
