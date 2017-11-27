@extends('layouts.cabecera')
@section('title','Usuarios')
@section('content')
  <a href="{{route('usuarios.create')}}" class="btn btn-success">Añadir Usuario</a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Email</td>
          <td>Tipo</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($usuarios as $usuario)
          <tr>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->email}}</td>
            <td>
              @if($usuario->type == "Admin")
                <span class="label label-default">{{$usuario->type}}</span>
              @elseif($usuario->type == "Coordinador")
                <span class="label label-success">{{$usuario->type}}</span>
              @elseif($usuario->type == "Administrativo")
                <span class="label label-success">{{$usuario->type}}</span>
              @elseif($usuario->type == "Profesor")
                <span class="label label-primary">{{$usuario->type}}</span>
              @elseif($usuario->type == "Alumno")
                <span class="label label-info">{{$usuario->type}}</span>
              @endif
            </td>
            <td>
              <a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/usuarios/','modelo'=>$usuario])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
