<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests;
use Carbon\Carbon;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::where('updated_at', '<=', Carbon::now())
            ->orderBy('updated_at', 'asc')
            ->paginate(config('games.games_per_page'));

        return view('games.index', compact('games'));
    }

    public function showGame($slug)
    {
        $game = Game::whereSlug($slug)->firstOrFail();

        return view('games.game')->withGame($game);
    }
}
