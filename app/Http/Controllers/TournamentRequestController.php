<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\TournamentRequest;
use Illuminate\Http\Request;

/*class TournamentRequestController extends Controller
{
    public function store(Request $request, Tournament $tournament)
    {
        TournamentRequest::create([
            'user_id' => auth()->id(),
            'tournament_id' => $tournament->id,
        ]);

        return redirect()->back()->with('success', 'Request sent!');
    }

    public function accept(TournamentRequest $request)
    {
        $request->update(['status' => 'accepted']);
        return back();
    }

    public function reject(TournamentRequest $request)
    {
        $request->update(['status' => 'rejected']);
        return back();
    }

    public function index(Tournament $tournament)
    {
        
        if ($tournament->user_id !== auth()->id()) {
        abort(403);
    }

    
        $this->authorize('viewRequests', $tournament);

        $requests = $tournament->requests()->with('user')->get();
        return view('tournaments.requests', compact('tournament','requests'));
    }

}
