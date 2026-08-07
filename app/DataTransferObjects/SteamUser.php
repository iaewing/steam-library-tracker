<?php

namespace App\DataTransferObjects;

class SteamUser
{
    public function __construct(
        public string $steamId,
        public string $personaName,
        public string $profileUrl,
        public string $avatar,
    ) {}

    public static function fromSteamArray(array $data): self
    {
        return new self(
            steamId: $data['steamid'],
            personaName: $data['personaname'],
            profileUrl: $data['profileurl'],
            avatar: $data['avatarfull'] ?? $data['avatar'],
        );
    }
}
