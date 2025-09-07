<?php

namespace App\Http\Controllers;
use App\Models\Team;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::with('stadiums')->get();
        $leagues = [
            'cl' => 'CENTRAL LEAGUE',
            'pl' => 'PACIFIC LEAGUE',
        ];
        return view('teams.index', compact('teams', 'leagues'));
    }
}
