<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getImage(): string
    {
        return 'https://media.steampowered.com/steamcommunity/public/images/apps/' . $this->external_id . '/' . $this->img_icon_url . '.jpg';
    }
}
