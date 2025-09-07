<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index(Team $team) {
        $stadiums= $team->stadiums;
        return view('stadiums.index', compact('team', 'stadiums'));
    }
}
