@extends('layouts.cabecera')
@section('title','Editar '.$coordinador->nombre)
@section('content')
  <div class='container'>
 @include('coordinadores.global',['ruta'=>['coordinadores.update',$coordinador],'accion'=>'PUT','coordinador'=>$coordinador])
  </div>
@endsection('content')
