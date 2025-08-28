<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResetPlayersSeeder extends Seeder
{
    public function run()
    {
        DB::table('players')->truncate();
    }
}