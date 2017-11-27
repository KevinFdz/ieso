{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}

<div class='group row'>
   {!!Form::label('Parcial 1','Parcial 1',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
   {!!Form::text('parcial1',$calificacion->parcial1,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
</div>
<div class='group row'>
   {!!Form::label('Parcial 2','Parcial 2',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
   {!!Form::text('parcial2',$calificacion->parcial2,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
</div>
<div class='group row'>
   {!!Form::label('ordinario','Ordinario',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
   {!!Form::text('ordinario',$calificacion->ordinario,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
</div>
<div class='group row'>
   {!!Form::submit('Calificar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
