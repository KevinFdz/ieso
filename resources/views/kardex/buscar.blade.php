@extends('layouts.cabecera')
@section('title','Buscar Kardex')
@section('content')
  

  <form action="{{url('kardex/kardex')}}" method="POST">
 <div class="form-group">
   {{ csrf_field() }}
  <input type="text" class="form-control" name='matricula' placeholder="Matricula del alumno" />
 </div>
 <button type="submit" class="btn btn-default">Buscar</button>
</form>
@endsection
