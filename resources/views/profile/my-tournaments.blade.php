@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Tournaments 💫</h2>

    @foreach($tournaments as $tournament)
        <div style="background:#1a1a2e; padding:20px; margin-bottom:15px; border-radius:10px; color: #f1f1f1;">
            <h3>{{ $tournament->name }}</h3>
            <p>{{ $tournament->description }}</p>
            <p><strong>Start:</strong> {{ $tournament->start_date }}</p>
            <p><strong>End:</strong> {{ $tournament->end_date }}</p>
            <p><strong>Location:</strong> {{ $tournament->location }}</p>

            <!-- add match button -->
            <a href="{{ route('tournaments.matches.create', $tournament->id) }}" class="btn btn-outline-success btn-sm mb-2">
                ➕ Add Match
            </a>

            <!-- matches -->
            @if($tournament->matches && $tournament->matches->count())
                <div class="mt-3">
                    <h5>⚔️ Matches:</h5>
                    @foreach($tournament->matches as $match)
                        <div class="border rounded p-2 mb-2" style="background:#16213e;">
                            <p><strong>{{ $match->team_a }}</strong> vs <strong>{{ $match->team_b }}</strong></p>
                            <p><small>📅 {{ $match->match_date }}</small></p>

                            @if(!$match->result)
                                <!-- 🛠️ ИСПРАВЛЕНО: маршрут теперь правильный -->
                                <a href="{{ route('results.create', $match->id) }}" class="btn btn-sm btn-primary">
                                    ➕ Add Result
                                </a>
                            @else
                                <p class="text-success">
                                    🏆 Winner: <strong>{{ $match->result->winner }}</strong> ({{ $match->result->score }})
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- add/delete -->
            <a href="{{ route('tournaments.edit', $tournament) }}" class="btn btn-warning mt-2">Edit</a>
            
            <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Delete this tournament? 😢')">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
