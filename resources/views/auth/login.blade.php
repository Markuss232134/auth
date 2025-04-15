<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Pierakstīšanās</title>
</head>
<body>
    <h1>Pierakstīties</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <label>E-pasts:
            <input type="email" name="email" required>
        </label><br>

        <label>Parole:
            <input type="password" name="password" required>
        </label><br><br>

        <button type="submit">Ieiet</button>
    </form>
</body>
</html>
