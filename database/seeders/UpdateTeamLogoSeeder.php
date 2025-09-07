<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use Illuminate\Database\Seeder;

class UpdateTeamLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logo = [
            '読売ジャイアンツ' => 'logo_g_l.gif',
            '阪神タイガース' => 'logo_t_l.gif',
            '横浜DeNAベイスターズ' => 'logo_db_l.gif',
            '広島東洋カープ' => 'logo_c_l.gif',
            '東京ヤクルトスワローズ' => 'logo_s_l.gif',
            '中日ドラゴンズ' => 'logo_d_l.gif',
            '福岡ソフトバンクホークス' => 'logo_h_l.gif',
            '北海道日本ハムファイターズ' => 'logo_f_l.gif',
            '千葉ロッテマリーンズ' => 'logo_m_l.gif',
            '東北楽天ゴールデンイーグルス' => 'logo_e_l.gif',
            'オリックス・バファローズ' => 'logo_b_l.gif',
            '埼玉西武ライオンズ' => 'logo_l_l.gif',
        ];

        foreach ($logo as $name => $filename) {
            Team::where('name', $name)->update(['logo_filename' => $filename]);
        }
    }
}
