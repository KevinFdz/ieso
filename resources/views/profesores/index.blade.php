@extends('layouts.cabecera')
@section('title','Profesores')
@section('content')
  <a href="{{route('profesores.create')}}" class="btn btn-success">Añadir Profesor </a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Matricula</td>
          <td>Nombre</td>
          <td>CURP</td>
          <td>Estado Civil</td>
          <td>Perfil</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>
        @foreach ($profesores as $profesor)
          <tr>
            <td>{{$profesor->matricula}}</td>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->curp}}</td>
            <td>{{$profesor->estado_c}}</td>
            <td><a href="{{route('profesores.show',$profesor->id)}}" class="btn btn-primary"><span class=" glyphicon glyphicon-eye-open"></span> </a></td>
            <td>
              <a href="{{route('profesores.edit',$profesor)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/profesores/','modelo'=>$profesor])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
