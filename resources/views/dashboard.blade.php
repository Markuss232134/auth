<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Mana lapa</title>
</head>
<body>
    <h1>Sveiks, {{ Auth::user()->first_name }}!</h1>
    <p>Šī ir tikai autentificētiem lietotājiem pieejama lapa.</p>
    
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Izrakstīties</button>
    </form>
</body>
</html>
