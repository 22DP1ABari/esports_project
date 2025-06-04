<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatch;

class TournamentMatchController extends Controller
{
    public function create(Tournament $tournament)
    {
        return view('matches.create', compact('tournament'));
    }

    public function store(Request $request, Tournament $tournament)
    {
        $validated = $request->validate([
            'team_a' => 'required|string|max:255',
            'team_b' => 'required|string|max:255',
            'match_date' => 'required|date',
        ]);

        $validated['tournament_id'] = $tournament->id;

        TournamentMatch::create($validated);

        return redirect()->route('tournaments.my')->with('success', 'Match added!');
    }
}
