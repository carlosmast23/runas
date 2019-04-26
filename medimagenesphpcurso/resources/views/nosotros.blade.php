@extends('plantilla')
@section('seccion')
    <h1>Nosotros</h1>

    @foreach($equipo as $item)
        <a href="#">{{$item}}</a><br>
    @endforeach
@endsection