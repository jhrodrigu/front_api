<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fotos</title>
</head>
<body>
    <h1>fotos</h1>
    <div>
        @foreach($fotos as $foto)
            <p>{{ $foto['id'] }}</p>
        @endforeach
    </div>
</body>
</html>
