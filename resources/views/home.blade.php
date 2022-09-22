@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)
        <ul>
            <li><img src="{{ $fotos['urls']['small'] }}" alt=""></li>
        </ul>
    @endforeach
@endsection
