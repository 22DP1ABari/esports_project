<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'team_a',
        'team_b',
        'match_date',
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
