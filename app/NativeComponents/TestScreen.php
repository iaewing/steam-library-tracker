<?php

namespace App\NativeComponents;

use App\DataTransferObjects\SteamGameData;
use App\Services\SteamService;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class TestScreen extends NativeComponent
{
    public function render(): View
    {
        $steam = app()->make(SteamService::class);
        $steamResponse = $steam->getOwnedGames('76561198025702288');

        $topGames = $steamResponse->games
           ->sortByDesc(fn (SteamGameData $game) => $game->playtimeForever)
           ->take(5);

        return view('native.test-screen', [
            'games' => $topGames,
        ]);
    }
}
