<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Sākums</title>
</head>
<body>

@auth
    <p>Sveiks, {{ Auth::user()->first_name }}!</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Izlogoties</button>
    </form>
@endauth


@guest
    <p>Sveiks, viesi!</p>
    <a href="{{ route('login.form') }}">Pierakstīties</a>
@endguest



</body>
</html>
