<?php
namespace Database\Seeders\Runners\Stadiums;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(database_path('seeders/data/stadiums/stadiums.csv'), 'r');

        // 1行目をヘッダーとして読み飛ばす
        $header = fgetcsv($file);

        while (($record = fgetcsv($file)) !== false) {
            [$name, $postcode, $address, $opened_at, $team_id] = $record;

            // 既存があれば更新、なければ挿入
            DB::table('stadiums')->updateOrInsert(
                ['name' => $name, 'team_id' => $team_id], // 検索条件
                [
                    'postcode' => $postcode,
                    'address' => $address,
                    'opened_at' => $opened_at,
                ]
            );
        }

        fclose($file);
    }
}
