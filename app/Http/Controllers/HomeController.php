<?php

namespace App\Http\Controllers;

use App\Services\SteamService;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Native\Mobile\Edge\NativeRouter;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SteamService $steamService)
    {
        $this->mobileEntryPoint();

        $games = $steamService->getOwnedGames('76561198025702288');

        return Inertia::render('Home', [
            'title' => 'Steam Library Tracker',
            'games' => $games,
        ]);
    }

    private function mobileEntryPoint() {
        if (
            request()->getPort() === (int) config('nativephp.server.http_port')
            && NativeRouter::isNativeRoute(config('nativephp.start_url'))
        ) {
            return redirect(config('nativephp.start_url'));
        }
    }
}
