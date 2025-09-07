<?php
namespace Database\Seeders\Runners\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(database_path('seeders/data/teams/teams.csv'), 'r');

        // 1行目をヘッダーとして読み飛ばす
        $header = fgetcsv($file);

        while (($record = fgetcsv($file)) !== false) {
            [$id, $name, $founded_at, $logo_filename, $color, $league] = $record;

            // 既存があれば更新、なければ挿入
            DB::table('teams')->updateOrInsert(
                ['id' => $id], // 検索条件
                [
                    'name' => $name,
                    'founded_at' => $founded_at,
                    'logo_filename' => $logo_filename,
                    'color' => $color,
                    'league' => $league,
                ]
            );
        }

        fclose($file);
    }
}
