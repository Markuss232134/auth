<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrācija</title>
</head>
<body>
    <h1>Reģistrēties</h1>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <label>Vārds:
            <input type="text" name="first_name"  required>
        </label><br>

        <label>Uzvārds:
            <input type="text" name="last_name"  required>
        </label><br>

        <label>E-pasts:
            <input type="email" name="email"  required>
        </label><br>

        <label>Parole:
            <input type="password" name="password" required>
        </label><br>

        <label>Apstiprini paroli:
            <input type="password" name="password_confirmation" required>
        </label><br><br>

        
        <button type="submit">Reģistrēties</button>
    </form>
</body>
</html>
