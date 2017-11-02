{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
	{!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
	<div class="col-xs-12 col-md-10">
		{!!Form::text('nombre',$licenciatura->nombre,['class'=>'form-control','placeholder'=>'Nombre'])!!}
	</div>
</div>
<!--                       Licenciatura                                 -->
@if($licenciatura->coordinador)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('Coordinador','coordinador',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('coordinador_id',$coordinadores,$licenciatura->coordinador->id,['class'=>'form-control select-query'])!!}
      </div>
   </div>
@else
   <div class='form-group row'>
      {!!Form::label('coortinador','Coordinador',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('coordinador_id',$coordinadores,null,['class'=>'form-control select-query','placeholder'=>'Elige Coordinador..'])!!}
      </div>
   </div>
@endif
<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
