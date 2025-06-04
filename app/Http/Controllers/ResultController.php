<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TournamentMatch;
use App\Models\Result;

class ResultController extends Controller
{
    public function create($matchId)
    {
        $match = TournamentMatch::findOrFail($matchId);
        return view('results.create', compact('match'));
    }

    public function store(Request $request, $matchId)
    {
        $match = TournamentMatch::findOrFail($matchId);

        $validated = $request->validate([
            'winner' => 'required|string|max:255',
            'score' => 'required|string|max:10',
        ]);

        $validated['tournament_match_id'] = $match->id;

        Result::create($validated);

        return redirect()->route('tournaments.my')->with('success', 'Result saved!');
    }
}
