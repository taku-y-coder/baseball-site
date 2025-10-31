<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Players
use Database\Seeders\Runners\Players\{
    BaystarsPlayersTableSeeder,
    BuffaloesPlayersTableSeeder,
    CarpPlayersTableSeeder,
    DragonsPlayersTableSeeder,
    EaglesPlayersTableSeeder,
    FightersPlayersTableSeeder,
    GiantsPlayersTableSeeder,
    HawksPlayersTableSeeder,
    LionsPlayersTableSeeder,
    MarinesPlayersTableSeeder,
    SwallowsPlayersTableSeeder,
    TigersPlayersTableSeeder,
};

// Stadiums
use Database\Seeders\Runners\Stadiums\StadiumsTableSeeder;

// Teams
use Database\Seeders\Runners\Teams\TeamsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(UpdateTeamLogoSeeder::class);

        $this->call([
            // Players
            BaystarsPlayersTableSeeder::class,
            BuffaloesPlayersTableSeeder::class,
            CarpPlayersTableSeeder::class,
            DragonsPlayersTableSeeder::class,
            EaglesPlayersTableSeeder::class,
            FightersPlayersTableSeeder::class,
            GiantsPlayersTableSeeder::class,
            HawksPlayersTableSeeder::class,
            LionsPlayersTableSeeder::class,
            MarinesPlayersTableSeeder::class,
            SwallowsPlayersTableSeeder::class,
            TigersPlayersTableSeeder::class,

            // Stadiums
            StadiumsTableSeeder::class,

            // Teams
            TeamsTableSeeder::class,

        ]);
    }
}
