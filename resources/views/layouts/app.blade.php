<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мультирегиональность</title>
</head>
<body>
    <header>
        @if(session('selected_city'))
            <p>Текущий город: {{ session('selected_city') }}</p>
        @else
            <p>Выберите город</p>
        @endif
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
