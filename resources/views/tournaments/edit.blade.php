@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Tournament</h1>
        <form method="POST" action="{{ route('tournaments.update', $tournament) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $tournament->name }}" required><br>
            <input type="text" name="location" value="{{ $tournament->location }}"><br>
            <textarea name="description">{{ $tournament->description }}</textarea><br>
            <input type="date" name="date" value="{{ $tournament->date }}"><br>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
