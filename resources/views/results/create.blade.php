@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Result for Match: <strong>{{ $match->team_a }}</strong> vs <strong>{{ $match->team_b }}</strong></h2>

    <form action="{{ route('results.store', $match->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="winner" class="form-label">Winner</label>
            <input type="text" name="winner" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="score" class="form-label">Score</label>
            <input type="text" name="score" class="form-control" required placeholder="e.g. 2-1">
        </div>

        <button type="submit" class="btn btn-success">✅ Save Result</button>
    </form>
</div>
@endsection
