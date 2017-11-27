{!!Form::open(['route'=>$ruta,'method'=>$accion]) !!}
<div class='form-group row'>
   {!!Form::label('matricula','Matricula',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('matricula',$alumno->matricula,['class'=>'form-control','placeholder'=>'Escriba la Matricula'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('nombre','Nombre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('nombre',$alumno->nombre,['class'=>'form-control','placeholder'=>'Nombre del alumno'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('fecha_n','Fecha de Nacimiento',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::date('fecha_n',$alumno->fecha_n,['class'=>'form-control','placeholder'=>'fecha de nacimiento'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('curp','CURP',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('curp',$alumno->curp,['class'=>'form-control','placeholder'=>'CURP'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('estado_c','Estado Civil',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('estado_c',['Soltero' => 'Soltero','Casado' => 'Casado'],$alumno->estado_c,['class'=>'form-control select-category','placeholder'=>' '])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('colonia','Colonia',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('colonia',$alumno->colonia,['class'=>'form-control','placeholder'=>'Colonia'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('calle','Calle',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('calle',$alumno->calle,['class'=>'form-control','placeholder'=>'Calle'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('cp','Codigo Postal',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('cp',$alumno->cp,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('telefono_c','Telefono de Casa',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('telefono_c',$alumno->telefono_c,['class'=>'form-control','placeholder'=>'Telefono de casa'])!!}
   </div>
</div>
<div class='form-group row'>
   {!!Form::label('celular','Celular',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::text('celular',$alumno->celular,['class'=>'form-control','placeholder'=>'Celular'])!!}
   </div>
</div>


<div class='form-group row'>
   {!!Form::label('Cuatrimestre','Cuatrimestre',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('cuatrimestre',array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),$alumno->cuatrimestre,['class'=>'form-control select-category','placeholder'=>'Cuatrimestre..'])!!}
   </div>
</div>

<div class='form-group row'>
   {!!Form::label('Status','Status',['class'=>'control-label col-xs-12 col-md-1'])!!}
   <div class="col-xs-12 col-md-10">
      {!!Form::select('status',array('Regular' => 'Regular','Baja Temporal' => 'Baja Temporal','Baja Definitiva' => 'Baja Definitiva'),$alumno->status,['class'=>'form-control select-category','placeholder'=>'Status..'])!!}
   </div>
</div>
<!--                       Licenciatura                                 -->
@if($alumno->licenciatura)<!--  Evaluamos si alumno contiene datos, como contiene datos se manda la etiqueta de editar        -->
   <div class='form-group row'>
      {!!Form::label('Licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('licenciatura_id',$licenciaturas,$alumno->licenciatura->id,['class'=>'form-control select-category'])!!}
      </div>
   </div>
@else
   <div class='form-group row'>
      {!!Form::label('Licenciatura','Licenciatura',['class'=>'control-label col-xs-12 col-md-1'])!!}
      <div class="col-xs-12 col-md-10">
         {!!Form::select('licenciatura_id',$licenciaturas,null,['class'=>'form-control select-category','placeholder'=>'Elige licenciatura...'])!!}
      </div>
   </div>


   <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label col-xs-12 col-md-1">E-Mail</label>

            <div class="col-xs-12 col-md-10">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
   

   <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="contraseña" class="control-label col-xs-12 col-md-1">Contraseña</label>

            <div class="col-xs-12 col-md-10">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
   </div>

   <div class="form-group row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <label for="password-confirm" class="control-label  col-xs-12 col-md-1">Confirmar Contraseña</label>

      <div class="col-xs-12 col-md-10">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

          @if ($errors->has('password_confirmation'))
              <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
      </div>
   </div>
@endif
 

<div class='form-group row'>
   {!!Form::submit('Enviar',['class'=>'btn btn-primary col-xs-offset-1'])!!}

</div>
 {!!Form::close()!!}
