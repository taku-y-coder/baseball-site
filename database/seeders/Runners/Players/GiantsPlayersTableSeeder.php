<?php
namespace Database\Seeders\Runners\Players;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiantsPlayersTableSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(database_path('seeders/data/players/giants_players.csv'), 'r');

        // 1行目をヘッダーとして読み飛ばす
        $header = fgetcsv($file);

        while (($record = fgetcsv($file)) !== false) {
            [$name, $position, $height, $weight, $team_id, $uniform_number] = $record;

            // 既存があれば更新、なければ挿入
            DB::table('players')->updateOrInsert(
                ['name' => $name, 'team_id' => $team_id], // 検索条件
                [
                    'position' => $position,
                    'height' => $height,
                    'weight' => $weight,
                    'uniform_number' => $uniform_number,
                ]
            );
        }

        fclose($file);
    }
}
