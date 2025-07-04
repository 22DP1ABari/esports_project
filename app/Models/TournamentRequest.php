<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentRequest extends Model
{
    protected $fillable = ['user_id', 'tournament_id', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tournament() {
        return $this->belongsTo(Tournament::class);
    }
}
