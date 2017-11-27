{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
  <div class='form-group row'>
    {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$grupo->nombre,['class'=>'form-control','placeholder'=>'Nombre del grupo'])!!}
    </div>
  </div>

  <!--                       Licenciatura                                 -->
  @if($grupo->licenciatura)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
    <div class='form-group row'>
      {!!Form::label('licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
        {!!Form::select('licenciatura_id',$licenciaturas,$grupo->licenciatura->id,['class'=>'form-control select-category'])!!}
      </div>
    </div>
  @else
    <div class='form-group row'>
      {!!Form::label('licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
        {!!Form::select('licenciatura_id',$licenciaturas,null,['class'=>'form-control select-category','placeholder'=>'Elige especialidad..'])!!}
      </div>

    </div>
  @endif

  <div class='form-group row'>
    {!!Form::label('cuatrimestre','Cuatrimestre',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('cuatrimestre',['1' =>'1','2' =>'2','3' =>'3','4' =>'4','5' =>'5','6' =>'6','7' =>'7','8' =>'8','9' =>'9','10' =>'10'],$grupo->cuatrimestre,['class'=>'form-control','placeholder'=>'Elige cuatrimestre..'])!!}
    </div>
  </div>
  <div class='form-group row'>
    {!!Form::label('turno','Turno',['class'=>'control-label col-xs-12 col-md-1'])!!}
    <div class="col-xs-12 col-md-10">
      {!!Form::select('turno',['1' => 'Matutino', '2' => 'Vespertino'],$grupo->turno,['class'=>'form-control','placeholder'=>'Elige turno..'])!!}
    </div>

  </div>

  <div class='form-group row'>
     {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

  </div>
 {!!Form::close()!!}
