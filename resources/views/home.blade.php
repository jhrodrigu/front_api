@extends('template')

@section('content')
    <h2>Fotografias</h2>

    <form action="/blog" method="POST">
        {{-- {{ csrf_field() }} --}}
        @csrf
    @foreach ($fotosArray as $fotos)

        <div class="form-check form-check-inline">
                <img src="{{ $fotos['urls']['small'] }}">
                <br>
            <div class="card-body">
              <p class="card-text">ID: {{$fotos['id']}}
                <input class="form-check-input" type="checkbox" name="enviar"  id="enviar" value="{{$fotos['urls']['small']}}"></p>
            </div>
          </div>
          @endforeach
          <input type="submit" value="Guardar" />
        </form>
@endsection


