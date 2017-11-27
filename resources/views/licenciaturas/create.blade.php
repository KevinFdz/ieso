@extends('layouts.cabecera')
@section('title','Nueva Licenciatura')
@section('content')
  <div class='container'>
    @include('licenciaturas.global',['ruta'=>'licenciaturas.store','accion'=>'POST','licenciatura'=>$licenciatura])

  </div>
@endsection('content')
