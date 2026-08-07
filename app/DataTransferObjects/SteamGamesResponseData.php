<?php

namespace App\DataTransferObjects;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

readonly class SteamGamesResponseData
{
    /**
     * @param  Collection<int, SteamGameData>  $games
     */
    public function __construct(
        public int $gameCount,
        public Collection $games,
    ) {}

    public static function fromResponse(Response|array $response): self
    {
        $data = $response instanceof Response
            ? $response->json('response', [])
            : ($response['response'] ?? $response);

        $games = collect($data['games'] ?? [])
            ->map(fn (array $game) => SteamGameData::fromArray($game));

        return new self(
            gameCount: (int) ($data['game_count'] ?? $games->count()),
            games: $games,
        );
    }
}
