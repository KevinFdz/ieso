@extends('layouts.cabecera')
@section('title','Asignar Clase')
@section('content')
  <div class='container'>
    @include('horarios.global',['ruta'=>'horarios.store','accion'=>'POST','horario'=>$horario])

  </div>
@endsection('content')
