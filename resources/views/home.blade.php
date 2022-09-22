@extends('template')

@section('content')
    <h2>Fotografias</h2>


    @foreach ($fotosArray as $fotos)
    <dir class="row mx-5">
    <div class="col">
        <div class="card" style="width: 15rem;">
            <img src="{{ $fotos['urls']['small'] }}" class="card-img-top" alt="Fotografia">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
          </div>
        </div>
        </dir>
    @endforeach
@endsection
