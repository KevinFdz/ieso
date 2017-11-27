@extends('layouts.cabecera')
@section('title','Nuevo Usuario')
@section('content')
  <div class='container'>
    @include('usuarios.global',['ruta'=>'usuarios.store','accion'=>'POST','usuario'=>$usuario])

  </div>
@endsection