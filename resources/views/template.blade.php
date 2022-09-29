<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Fotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
{{-- Aqui esta la pagina principal, la cual muestra el navbar para navegar entre las 2 paginas --}}
    <div class="container">
    <ul class="nav">
        <li class="nav-item">
            {{-- Aqui se crea el link para que al momento de precionar nos traiga la ruta que esta asociada a href, ya sea imagenes o favoritos --}}
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}"> Fotografias </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Favoritas</a>
        </li>

      </ul>
    <hr>

    {{-- Aqui se muestra el contenido de las fotos, la cual se trae atraves de una extencion con @yield, y el nombre de la views --}}
    @yield('content')
</div>
</body>
</html>
