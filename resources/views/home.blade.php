@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)
        <div class="card">
            <img src="{{ $fotos['urls']['small'] }}" alt="Fotografia" for="seleccionar">
            <input class="form-check-input" type="radio" id="seleccionar">
        </div>

    @endforeach
@endsection


