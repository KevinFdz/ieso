@extends('layouts.cabecera')
@section('title','Registrar Coordinador')
@section('content')
  <div class='container'>
    @include('coordinadores.global',['ruta'=>'coordinadores.store','accion'=>'POST','coordinador'=>$coordinador])

  </div>
@endsection('content')
