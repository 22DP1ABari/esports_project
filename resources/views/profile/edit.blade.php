@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tournament 🛠️</h2>

    <form action="{{ route('tournaments.update', $tournament) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $tournament->name }}" required><br><br>
        <input type="text" name="location" value="{{ $tournament->location }}"><br><br>
        <textarea name="description">{{ $tournament->description }}</textarea><br><br>
        <input type="date" name="start_date" value="{{ $tournament->start_date }}"><br><br>
        <input type="date" name="end_date" value="{{ $tournament->end_date }}"><br><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
