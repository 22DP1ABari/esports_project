<?php


namespace App\Http\Controllers;


use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

  

class TournamentController extends Controller
{ 
    use AuthorizesRequests;

     public function myTournaments()
    {
        $tournaments = auth()->user()->tournaments ?? [];
        return view('profile.my-tournaments', compact('tournaments'));
    }

    public function create()
{
    return view('tournaments.create');
}



public function store(Request $request)
{
    $data = $request->validate([
        'name'       => 'required|string|max:255',
        'description'=> 'nullable|string',
        'start_date' => 'required|date',
        'end_date'   => 'nullable|date',
        'location'   => 'nullable|string|max:255',
    ]);

    
    $data['user_id'] = auth()->id();

    Tournament::create($data);

    return redirect()->route('tournaments.index')
                     ->with('success', 'Tournament created!');
}




public function edit(Tournament $tournament)
{
    $this->authorize('update', $tournament);
    return view('tournaments.edit', compact('tournament'));
}

public function update(Request $request, Tournament $tournament)
{
    $this->authorize('update', $tournament);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'date' => 'nullable|date',
    ]);

    $tournament->update($validated);

    return redirect()->route('tournaments.my')->with('success', 'Tournament updated!');
}

public function destroy(Tournament $tournament)
{
    $this->authorize('delete', $tournament);

    $tournament->delete();

    return redirect()->route('tournaments.my')->with('success', 'Tournament deleted!');
}

public function index(Request $request)
{
    $query = Tournament::with('applications')->latest();

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->has('location')) {
        $query->where('location', 'like', '%' . $request->location . '%');
    }

    $tournaments = $query->get();

    return view('tournaments.index', compact('tournaments'));
}













}
