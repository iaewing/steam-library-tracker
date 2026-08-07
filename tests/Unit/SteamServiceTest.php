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
            'api.steampowered.com' => Http::response([
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
                    ],
                ],
            ], 200),
        ]);
        $player = $this->service->getUserDetails($steamId);

        expect($player)
            ->steamId->toBe('76561198025702288')
            ->personaName->toBe('Amaretto')
            ->profileUrl->toBe('https://steamcommunity.com/profiles/76561198025702288/');
    });

    it('handles multiple steam ids', function () {})->skip();
});
