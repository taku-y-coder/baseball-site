<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('teams')->insert([
            [
                'id' => 1,
                'team_name' => '読売ジャイアンツ',
            ],
            [
                'id' => 2,
                'team_name' => '阪神タイガース',
            ],
            [
                'id' => 3,
                'team_name' => '横浜DeNAベイスターズ',
            ],
            [
                'id' => 4,
                'team_name' => '広島東洋カープ',
            ],
            [
                'id' => 5,
                'team_name' => '東京ヤクルトスワローズ',
            ],
            [
                'id' => 6,
                'team_name' => '中日ドラゴンズ',
            ],
            [
                'id' => 7,
                'team_name' => '福岡ソフトバンクホークス',
            ],
            [
                'id' => 8,
                'team_name' => '北海道日本ハムファイターズ',
            ],
            [
                'id' => 9,
                'team_name' => '千葉ロッテマリーンズ',
            ],
            [
                'id' => 10,
                'team_name' => '東北楽天ゴールデンイーグルス',
            ],
            [
                'id' => 11,
                'team_name' => 'オリックス・バファローズ',
            ],
            [
                'id' => 12,
                'team_name' => '埼玉西武ライオンズ',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
