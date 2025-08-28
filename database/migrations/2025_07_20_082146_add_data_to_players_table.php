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
        DB::table('players')->insert([
            [
                'name' => '増田大輝',
                'position' => '内野手',
                'height' => 172,
                'weight' => 68,
                'team_id' => 1,
                'uniform_number' => 0,
            ],
            [
                'name' => '吉川尚輝',
                'position' => '内野手',
                'height' => 177,
                'weight' => 82,
                'team_id' => 1,
                'uniform_number' => 2,
            ],
            [
                'name' => '門脇誠',
                'position' => '内野手',
                'height' => 171,
                'weight' => 76,
                'team_id' => 1,
                'uniform_number' => 5,
            ],
            [
                'name' => '坂本勇人',
                'position' => '内野手',
                'height' => 186,
                'weight' => 86,
                'team_id' => 1,
                'uniform_number' => 6,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
