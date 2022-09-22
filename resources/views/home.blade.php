@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)
        <ul>
            <li>{{ $fotos['name'] }}</li>
        </ul>
    @endforeach
@endsection
