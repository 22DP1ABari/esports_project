@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">➕ Add Match to "{{ $tournament->name }}"</h2>

    <form method="POST" action="{{ route('tournaments.matches.store', $tournament->id) }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Team A</label>
            <input type="text" name="team_a" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Team B</label>
            <input type="text" name="team_b" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Match Date</label>
            <input type="datetime-local" name="match_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Match</button>
    </form>
</div>
@endsection
