@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)

        <div class="form-check form-check-inline">
                <img src="{{ $fotos['urls']['small'] }}">
                <br>
            <div class="card-body">
              <p class="card-text">Creada: {{ $fotos['created_at'] }}
                <input class="form-check-input" type="checkbox" value="{{$fotos['id']}}" name="{{$fotos['id']}}"></p>
            </div>
          </div>
        @endforeach
        <input type="submit" name="enviar" value="enviar" />
@endsection


