@extends('layouts.cabecera')
@section('title','Crear Materia')
@section('content')
  <div class='container'>
    @include('materias.global',['ruta'=>'materias.store','accion'=>'POST','materia'=>$materia])
  </div>
@endsection
@section('chosen')
	<script>
    	$(".select-licenciatura").chosen({
    		no_results_text: "No se encontro la Licenciatura: "
    	});

 	</script>
@endsection
