{{-- Este es el contenido que se muestra, en este caso las imagenes --}}
@extends('template')

{{-- Este es el combre que se le puso para que sea reconocido en la otra pagina y lo pueda mostrar --}}
@section('content')
    <h2>Fotografias</h2>

    <form action="/blog" method="POST">
        {{-- Cuando se hace un metodo POST, se requiere de un token, ya que eso viene de laravel que en este caso es @csrf para que no genere error --}}
        @csrf

        {{-- Aqui se hace un @foreach con el array que trae el api y lo pueda recorer --}}
    @foreach ($fotosArray as $fotos)

        <div class="form-check form-check-inline">
            {{-- Aqui se le indica que debe traer el array, ya que trae varios json, que me muestre solo las imagens  --}}
                <img src="{{ $fotos['urls']['small'] }}">
                <br>
            <div class="card-body">
              <p class="card-text">ID: {{$fotos['id']}}
                {{-- Aqui lo que indico es que cada vez que se seleccione un input, me traiga el id de esa imagen que seleccione para asi poderlo buscar mas facil --}}
                <input class="form-check-input" type="checkbox" name="enviar"  id="enviar" value="{{$fotos['id']}}"></p>
            </div>
          </div>
          @endforeach
          <input type="submit" value="Guardar" />
        </form>
@endsection


