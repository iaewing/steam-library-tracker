<?php

namespace App\Services;

use App\Data\SteamUser;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class SteamService
{
    const BASE_URL = 'https://api.steampowered.com/';

    public function getUserDetails(string|array $steamIds): Collection
    {
        if (gettype($steamIds) !== 'string') {
            $steamIds = implode(',', $steamIds);
        }

        $response = Http::baseUrl('https://api.steampowered.com/')
            ->get('ISteamUser/GetPlayerSummaries/v0002/', [
                'key' => config('services.steam.key'),
                'steamids' => $steamIds,
            ]);

        $playerData = collect($response->json('response.players'));

        $playerData = $playerData->map(function ($player) {
            return SteamUser::fromSteamArray($player);
        });

        return $playerData;
    }
}
