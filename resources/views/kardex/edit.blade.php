@extends('layouts.cabecera')
@section('title',$kardex->materia->nombre)
@section('content')
<div class='container'>
		{!!Form::open(['route'=>['reticula.update',$kardex],'method'=>'PUT','kardex'=>$kardex]) !!}

		<div class='group row'>
		   {!!Form::label('Calificacion','Calficacion')!!}
		   {!!Form::text('calificacion',$kardex->calificacion,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
		</div>
		
		<div class='group row'>
		   {!!Form::submit('Calificar',['class'=>'btn btn-primary'])!!}

		</div>
		 {!!Form::close()!!}
  </div>
  @endsection('content')