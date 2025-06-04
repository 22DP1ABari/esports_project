<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tournament;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function apply($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);

        if ($tournament->applications()->where('user_id', auth()->id())->exists()) {
            return redirect()->back()->with('warning', 'You have already applied!');
        }

        Application::create([
            'user_id' => auth()->id(),
            'tournament_id' => $tournament->id,
        ]);

        return redirect()->back()->with('success', 'Application submitted!');
    }

    public function cancel($tournamentId)
    {
        Application::where('tournament_id', $tournamentId)
                   ->where('user_id', auth()->id())
                   ->delete();

        return redirect()->back()->with('info', 'Application cancelled.');
    }
}
