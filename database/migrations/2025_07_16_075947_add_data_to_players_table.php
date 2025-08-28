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
        schema::table('players', function(Blueprint $table) {
            $table->unsignedTinyInteger('uniform_number')->nullable();
        });
        
        DB::table('players')->insert([
            [
                'name' => '荻野貴司',
                'position' => '外野手',
                'height' => 172,
                'weight' => 75,
                'team_id' => 9,
                'uniform_number' => 0,
            ],
            [
                'name' => '藤原恭大',
                'position' => '外野手',
                'height' => 181,
                'weight' => 80,
                'team_id' => 9,
                'uniform_number' => 1,
            ],
            [
                'name' => '松川虎生',
                'position' => '捕手',
                'height' => 178,
                'weight' => 98,
                'team_id' => 9,
                'uniform_number' => 2,
            ],
            [
                'name' => '角中勝也',
                'position' => '外野手',
                'height' => 180,
                'weight' => 85,
                'team_id' => 9,
                'uniform_number' => 3,
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
