@extends('template')

@section('content')
    <h2>Fotografias</h2>



    @foreach ($fotosArray as $fotos)
    <div class="container text-center mt-5">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-4">
                <div class="card shadow">
                    <img src="{{ $fotos['urls']['small'] }}" class="card-img-top" alt="Fotografia" for="flexCheckDefault">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  </div>
            </div>
        </div>
    </div>


    {{-- <dir class="row mx-5">
    <div class="col">
        <div class="card" style="width: 15rem;">
            <img src="{{ $fotos['urls']['small'] }}" class="card-img-top" alt="Fotografia">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
          </div>
        </div>
        </dir> --}}
    @endforeach
@endsection


