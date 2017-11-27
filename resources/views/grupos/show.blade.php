@extends('layouts.cabecera')
@section('title',"Grupo ".$grupo->nombre)
@section('content')
@if($grupo->status == "Activo")
<div class="row"><a href="{{route('grupos.alumnos',$grupo->id)}}" class="btn btn-primary col-sm-pull-1 col-sm-1 col-sm-push-10"><span class=" glyphicon glyphicon-plus">Alumno</span> </a></div>
<div class="row">
   <h1> </h1>
</div>
@endif
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <td>Alumno</td>
          <td>Perfil</td>
          <td>Remover</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->nombre}}</td>
            <td><a href="{{route('alumnos.show',$alumno)}}" class="btn btn-primary"><span class=" glyphicon glyphicon-eye-open"></span> </a></td>
            <td><a href="{{route('grupos.remover',$alumno)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> </a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
