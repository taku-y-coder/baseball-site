<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Team $team) {
        $players = $team->players;
        return view('players.index', compact('team', 'players'));
    }
}
