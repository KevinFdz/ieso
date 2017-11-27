@extends('layouts.cabecera')
@section('title','Grupos')
@section('content')
  <a href="{{route('grupos.create')}}" class="btn btn-success">Añadir Grupo</a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Licenciatura</td>
          <td>Cuatrimestre</td>
          <td>Turno</td>
          <td>Status</td>
          <td>Alumnos</td>
          <td>Editar</td>
          <td>Eliminar</td>

        </tr>
      <thead>
      <tbody>

        @foreach ($grupos as $grupo)
          <tr>
            <td>{{$grupo->nombre}}</td>
            <td>{{$grupo->licenciatura->nombre}}</td>
            <td>{{$grupo->cuatrimestre}}</td>
            <td>{{$grupo->turno}}</td>
            <td>{{$grupo->status}}</td>
            <td><a href="{{route('grupos.show',$grupo)}}" class="btn btn-primary"><span class=" glyphicon glyphicon-eye-open"></span> </a></td>
            <td>
              <a href="{{route('grupos.edit',$grupo)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>
           <td>
              @include('layouts.eliminar',['ruta'=>'/grupos/','modelo'=>$grupo])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
