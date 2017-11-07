@extends('layouts.cabecera')
@section('title',"Grupo ".$grupo->nombre)
@section('content')
{!!Form::open(['route'=>'gruposA.store','method'=>'POST']) !!}
  <div class='form-group row'>
   {!!Form::label('Alumnos:','Alumnos:',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
    {!!Form::select('alumnos_id[]',$alumnos,null,['alumno_id'=>'id','class'=>'form-control select-alumno','multiple','data-placeholder' =>"Alumnos"])!!}
  </div> 
  <input type="hidden" name="idg" value="{{$grupo->id}}">
  </div>
<div class='form-group row'>
   {!!Form::submit('enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!} 
  @endsection
  @section('chosen')
  <script>
      $(".select-alumno").chosen({
        no_results_text: "No se encontro el Alumno: "
      });

  </script>
@endsection
