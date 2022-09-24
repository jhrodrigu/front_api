@extends('template')

@section('content')
    <h2>Favoritas</h2>

    @foreach ($selected as $seled)

    <div class="form-check form-check-inline">
            <img src="{{ $seled['urls']['small'] }}">

      </div>
    @endforeach

@endsection
