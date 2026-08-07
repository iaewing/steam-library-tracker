<?php

namespace App\DataTransferObjects;

use Illuminate\Support\Carbon;

readonly class SteamGameData
{
    /**
     * @param  array<int>  $contentDescriptorIds
     */
    public function __construct(
        public int $appId,
        public string $name,
        public int $playtimeForever,
        public ?string $imgIconUrl,
        public int $playtimeWindowsForever,
        public int $playtimeMacForever,
        public int $playtimeLinuxForever,
        public int $playtimeDeckForever,
        public ?Carbon $lastPlayedAt,
        public array $contentDescriptorIds,
        public int $playtimeDisconnected,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            appId: (int) $data['appid'],
            name: (string) ($data['name'] ?? ''),
            playtimeForever: (int) ($data['playtime_forever'] ?? 0),
            imgIconUrl: $data['img_icon_url'] ?? null,
            playtimeWindowsForever: (int) ($data['playtime_windows_forever'] ?? 0),
            playtimeMacForever: (int) ($data['playtime_mac_forever'] ?? 0),
            playtimeLinuxForever: (int) ($data['playtime_linux_forever'] ?? 0),
            playtimeDeckForever: (int) ($data['playtime_deck_forever'] ?? 0),
            lastPlayedAt: ! empty($data['rtime_last_played'])
            ? Carbon::createFromTimestamp($data['rtime_last_played'])
            : null,
            contentDescriptorIds: $data['content_descriptorids'] ?? [],
            playtimeDisconnected: (int) ($data['playtime_disconnected'] ?? 0),
        );
    }

    /**
     * Helper to convert playtime minutes into readable hours.
     */
    public function playtimeHours(): float
    {
        return round($this->playtimeForever / 60, 1);
    }

    /**
     * Get full CDN URL for game icon if hash exists.
     */
    public function iconUrl(): ?string
    {
        if (! $this->imgIconUrl) {
            return null;
        }

        return "https://media.steampowered.com/steamcommunity/public/images/apps/{$this->appId}/{$this->imgIconUrl}.jpg";
    }
}
