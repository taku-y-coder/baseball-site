<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Team extends Model
{
    use HasFactory;

    protected $fillname = [
        'id',
        'name',
        'founded_at',
        'logo_filename',
        'color',
        'league',
    ];

    public function stadiums()
    {
        return $this->hasMany(Stadium::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function getFoundedAtFormattedAttribute()
    {
        return Carbon::parse($this->founded_at)->format('Y年n月d日');
    }
}
