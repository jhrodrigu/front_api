@extends('template')

@section('content')
    <h2>Fotografias</h2>

    @foreach ($fotosArray as $fotos)

        <div class="card" style="width: 18rem;">
            <img src="{{ $fotos['urls']['small'] }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Creada: {{ $fotos['created_at'] }}
                <input class="form-check-input" type="radio" id="selec"></p>
            </div>
          </div>

    @endforeach
@endsection


