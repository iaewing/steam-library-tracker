<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameCompletedController extends Controller
{
    public function __invoke(Request $request, Game $game)
    {
        $validated = $request->validate([
            'completed' => 'required|boolean',
        ]);

        $game->update($validated);

        return back();
    }
}
