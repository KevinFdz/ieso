@extends('layouts.cabecera')
@section('title','Alumnos')
@section('content')
  <a href="{{route('alumnos.create')}}" class="btn btn-success">Añadir Alumno </a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Matricula</td>
          <td>Nombre</td>
          <td>cuatrimestre</td>
          <td>Grupo</td>
          <td>Licenciatura</td>
          <td>Status</td>
          <td>Perfil</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->matricula}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->cuatrimestre}}</td>
            @if($alumno->grupo_id)
            <td>{{$alumno->grupo->nombre}}</td>
            @else
            <td></td>
            @endif
            <td>{{$alumno->licenciatura->nombre}}</td>
            <td>{{$alumno->status}}</td>
            <td><a href="{{route('alumnos.show',$alumno)}}" class="btn btn-primary"><span class=" glyphicon glyphicon-eye-open"></span> </a></td>
            <td>
              <a href="{{route('alumnos.edit',$alumno)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/alumnos/','modelo'=>$alumno])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
