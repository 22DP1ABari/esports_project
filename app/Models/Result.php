<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_match_id',
        'winner',
        'score',
    ];

    public function match()
    {
        return $this->belongsTo(TournamentMatch::class);
    }
}
