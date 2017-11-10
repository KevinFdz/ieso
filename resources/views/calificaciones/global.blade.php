{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}

<div class='group row'>
   {!!Form::label('Parcial 1','Parcial 1')!!}
   {!!Form::text('parcial1',$calificacion->parcial1,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
<div class='group row'>
   {!!Form::label('Parcial 2','Parcial 2')!!}
   {!!Form::text('parcial2',$calificacion->parcial2,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
<div class='group row'>
   {!!Form::label('ordinario','Ordinario')!!}
   {!!Form::text('ordinario',$calificacion->ordinario,['class'=>'form-control','placeholder'=>'Calificacion'])!!}
</div>
<div class='group row'>
   {!!Form::submit('Calificar',['class'=>'btn btn-primary'])!!}

</div>
 {!!Form::close()!!}
