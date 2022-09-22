<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Fotos</title>
</head>
<body>
    <div>
        <h1>
            <a href=" {{ route('home') }}">Fotografias</a>
            <a href="{{ route('blog') }}">Favoritas</a>
        </h1>
    </div>
    <hr>

    @yield('content')
</body>
</html>
