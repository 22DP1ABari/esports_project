<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Tournament</title>
</head>
<body style="background:#1a1a2e; color:white; font-family:Poppins,sans-serif;">
    <h1>Create Tournament</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tournaments.store') }}">
        @csrf
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Description: <textarea name="description"></textarea></label><br><br>
        <label>Start Date: <input type="date" name="start_date" required></label><br><br>
        <label>Location: <input type="text" name="location"></label><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
