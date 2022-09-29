{{-- Este es el contenido que se muestra, en este caso las imagenes --}}
@extends('template')

{{-- Este es el combre que se le puso para que sea reconocido en la otra pagina y lo pueda mostrar --}}
@section('content')
    <h2>Favoritas</h2>

    {{-- Aqui lo que se hace es un @foreach con las imagens seleccionadas, ya que es un array me las muestre las favoritas --}}
    @foreach ($fotosArray as $seled)

    <div class="form-check form-check-inline">
            <img src="{{ $seled['urls']['small'] }}">

      </div>

    @endforeach


@endsection
