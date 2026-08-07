<?php

namespace App\Services;

use App\Data\SteamUser;
use Illuminate\Support\Facades\Http;

class SteamService
{
    const BASE_URL = 'https://api.steampowered.com/';

    public function getUserDetails(string $steamId): ?SteamUser
    {
        $response = Http::baseUrl('https://api.steampowered.com/')
            ->get('ISteamUser/GetPlayerSummaries/v0002/', [
                'key' => config('services.steam.key'),
                'steamids' => $steamId,
            ]);

        $playerData = $response->json('response.players.0');

        return $playerData ? SteamUser::fromSteamArray($playerData) : null;
    }
}
