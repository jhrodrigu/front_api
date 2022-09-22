@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)
        <ul>
            <li>{{ $fotos['id'] }}</li>
        </ul>
    @endforeach
@endsection
