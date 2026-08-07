<?php

use App\Services\SteamService;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    $this->service = app(SteamService::class);
});

describe('retrieving user details', function () {
    it('handles a single steam id', function () {
        $steamId = '76561198025702288';
        Http::fake([
            'api.steampowered.com/*' => Http::response([
                'response' => [
                    'players' => [
                        [
                            'steamid' => $steamId,
                            'communityvisibilitystate' => 3,
                            'profilestate' => 1,
                            'personaname' => 'Amaretto',
                            'profileurl' => 'https://steamcommunity.com/profiles/76561198025702288/',
                            'avatar' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c.jpg',
                            'avatarmedium' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c_medium.jpg',
                            'avatarfull' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c_full.jpg',
                            'avatarhash' => '9a549bbec26c86a1c79d975056d3bdea5850780c',
                            'lastlogoff' => 1786067480,
                            'personastate' => 0,
                            'realname' => 'Ian',
                            'primaryclanid' => '103582791434327347',
                            'timecreated' => 1274397592,
                            'personastateflags' => 0,
                        ],
                    ],
                ],
            ], 200),
        ]);
        $player = $this->service->getUserDetails($steamId)->first();

        expect($player)
            ->steamId->toBe('76561198025702288')
            ->personaName->toBe('Amaretto')
            ->profileUrl->toBe('https://steamcommunity.com/profiles/76561198025702288/');
    });

    it('handles multiple steam ids', function () {
        $steamIds = [
            '76561198025702288',
            '76561198025702289',
        ];

        Http::fake([
            'api.steampowered.com/*' => Http::response([
                'response' => [
                    'players' => [
                        [
                            'steamid' => '76561198025702288',
                            'communityvisibilitystate' => 3,
                            'profilestate' => 1,
                            'personaname' => 'Amaretto',
                            'profileurl' => 'https://steamcommunity.com/profiles/76561198025702288/',
                            'avatar' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c.jpg',
                            'avatarmedium' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c_medium.jpg',
                            'avatarfull' => 'https://avatars.steamstatic.com/9a549bbec26c86a1c79d975056d3bdea5850780c_full.jpg',
                            'avatarhash' => '9a549bbec26c86a1c79d975056d3bdea5850780c',
                            'lastlogoff' => 1786067480,
                            'personastate' => 0,
                            'realname' => 'Ian',
                            'primaryclanid' => '103582791434327347',
                            'timecreated' => 1274397592,
                            'personastateflags' => 0,
                        ],
                        [
                            'steamid' => '76561198025702289',
                            'communityvisibilitystate' => 3,
                            'profilestate' => 1,
                            'personaname' => 'Meh',
                            'profileurl' => 'https://steamcommunity.com/profiles/76561198025702289/',
                            'avatar' => 'https://avatars.fastly.steamstatic.com/cf15c810882268f0c944ee1d22c2f40a1b059902_full.jpg',
                            'avatarmedium' => 'https://avatars.fastly.steamstatic.com/cf15c810882268f0c944ee1d22c2f40a1b059902_medium.jpg',
                            'avatarfull' => 'https://avatars.fastly.steamstatic.com/cf15c810882268f0c944ee1d22c2f40a1b059902_full.jpg',
                            'avatarhash' => '9a549bbec26c86a1c79d975056d3bdea5850780c',
                            'lastlogoff' => 1786067480,
                            'personastate' => 0,
                            'realname' => 'Tim',
                            'primaryclanid' => '103582791434327347',
                            'timecreated' => 1274397592,
                            'personastateflags' => 0,
                        ],
                    ],
                ],
            ], 200),
        ]);
        $players = $this->service->getUserDetails($steamIds);

        expect($players->first())
            ->steamId->toBe('76561198025702288')
            ->personaName->toBe('Amaretto')
            ->profileUrl->toBe('https://steamcommunity.com/profiles/76561198025702288/');

        expect($players->last())
            ->steamId->toBe('76561198025702289')
            ->personaName->toBe('Meh')
            ->profileUrl->toBe('https://steamcommunity.com/profiles/76561198025702289/');
    });
});

it('retrieves a list of the users owned games', function () {
    $steamId = '76561198025702288';
    $gameCount = 1;
    $gameId = 10;
    $gameName = 'Counter-Strike';

    Http::fake([
        'api.steampowered.com/*' => Http::response([
            'response' => [
                'game_count' => $gameCount,
                'games' => [
                    [
                        'appid' => $gameId,
                        'name' => $gameName,
                        'playtime_forever' => 1,
                        'img_icon_url' => '6b0312cda02f5f777efa2f3318c307ff9acafbb5',
                        'playtime_windows_forever' => 0,
                        'playtime_mac_forever' => 0,
                        'playtime_linux_forever' => 0,
                        'playtime_deck_forever' => 0,
                        'rtime_last_played' => 1362384000,
                        'content_descriptorids' => [
                            2,
                            5,
                        ],
                        'playtime_disconnected' => 0,
                    ],
                ],
            ],
        ], 200),
    ]);
    $response = $this->service->getOwnedGames($steamId);
    $games = collect($response['games']);

    expect($response['game_count'])->toBe($gameCount);
    expect($games->first())
        ->appid->toBe($gameId)
        ->name->toBe($gameName);
});
