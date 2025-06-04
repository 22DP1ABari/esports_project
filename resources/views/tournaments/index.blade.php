<@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold"> All Tournaments</h2>
        <a href="{{ route('tournaments.create') }}" class="btn btn-success">+ Create Tournament</a>
    </div>

    <form method="GET" action="{{ route('tournaments.index') }}" class="row mb-4">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="🔍 Search by name..." value="{{ request('search') }}">
        </div>
        <div class="col-md-4">
            <input type="text" name="location" class="form-control" placeholder="📍 Search by location..." value="{{ request('location') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
        </div>
    </form>

    @if($tournaments->count())
        <div class="row">
            @foreach($tournaments as $tournament)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tournament->name }}</h5>
                            <p class="card-text">
                                <strong>Date:</strong> {{ $tournament->date }}<br>
                                <strong>Location:</strong> {{ $tournament->location }}<br>
                                <strong>Description:</strong> {{ $tournament->description }}
                            </p>
                            @auth
                                @if(!$tournament->applications->contains('user_id', auth()->id()))
                                    <form method="POST" action="{{ route('applications.apply', $tournament->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-success w-100">🎮 Apply to Join</button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('applications.cancel', $tournament->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger w-100">💥 Cancel Application</button>
                                    </form>
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
             No tournaments found. Try changing your search filters!
        </div>
    @endif


  

</div>
@endsection
