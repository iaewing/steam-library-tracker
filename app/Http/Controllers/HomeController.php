<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Native\Mobile\Edge\NativeRouter;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->mobileEntryPoint();

        $sortField = $request->query('sort') ?? 'name';
        $sortDirection = $request->query('direction') ?? 'asc';

        $games = Game::query()
            ->orderBy($sortField, $sortDirection)
            ->get();
//        dd($sortField, $sortDirection, $games->toArray());
//fix completed sorting not working
        return Inertia::render('Home', [
            'title' => 'Steam Library Tracker',
            'games' => $games->toArray(),
            'filters' => [
                'sort' => $sortField,
                'direction' => $sortDirection,
            ]
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
