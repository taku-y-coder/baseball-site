<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Team;

class Stadium extends Model
{
    use HasFactory;

    protected $fillname = [
        'name',
        'postcode',
        'address',
        'opened_at',
        'team_id',
    ];

    // 正しいテーブル名を設定
    protected $table = 'stadiums';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getOpenedAtFormattedAttribute()
    {
        return Carbon::parse($this->opened_at . '-01')->format('Y年n月');
    }
}