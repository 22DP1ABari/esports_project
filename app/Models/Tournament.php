<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'user_id',
    ];

    public function matches()
    {
        return $this->hasMany(TournamentMatch::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
{
    return $this->hasMany(\App\Models\Application::class);
}

}


