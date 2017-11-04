@extends('layouts.cabecera')
@section('title','Buscar kardex')
@section('content')
  

  <form action="{{url('reticula/kardex')}}" method="POST">
 <div class="form-group">
   {{ csrf_field() }}
  <input type="text" class="form-control" name='matricula' placeholder="Matricula del alumno" />
 </div>
 <button type="submit" class="btn btn-default">Buscar</button>
</form>
@endsection
