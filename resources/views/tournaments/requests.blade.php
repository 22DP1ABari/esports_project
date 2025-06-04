<h2>Requests</h2>
@foreach ($tournament->requests as $req)
    <p>{{ $req->user->name }} - {{ $req->status }}</p>
    @if ($req->status === 'pending')
        <form method="POST" action="{{ route('tournament.request.accept', $req->id) }}">
            @csrf
            <button type="submit">Accept</button>
        </form>
        <form method="POST" action="{{ route('tournament.request.reject', $req->id) }}">
            @csrf
            <button type="submit">Reject</button>
        </form>
    @endif
@endforeach

@extends('layouts.app')
@section('content')
<h1>Requests for "{{ $tournament->name }}"</h1>

@foreach($requests as $req)
    <p>
      {{ $req->user->name }} — status: <strong>{{ $req->status }}</strong>
      @if($req->status==='pending')
        <form method="POST" action="{{ route('tournament.request.accept', $req->id) }}">
          @csrf<button>Accept</button>
        </form>
        <form method="POST" action="{{ route('tournament.request.reject', $req->id) }}">
          @csrf<button>Decline</button>
        </form>
      @endif
    </p>
@endforeach

<a href="{{ route('tournaments.mine') }}">← Back to my tournaments</a>
@endsection

