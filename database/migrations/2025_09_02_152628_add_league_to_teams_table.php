<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->date('founded_at')->nullable()->after('team_name');
            $table->string('color')->nullable()->after('logo_filename');
            $table->string('league')->nullable()->after('color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('founded_at');
            $table->dropColumn('color');
            $table->dropColumn('league');
        });
    }
};
