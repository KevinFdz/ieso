@extends('layouts.cabecera')
@section('title','Licenciaturas')
@section('content')
  <a href="{{route('licenciaturas.create')}}" class="btn btn-success">Añadir Licenciatura </a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Coordinador</td>
          <td>Materias</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($licenciaturas as $licenciatura)
          <tr>
            <td>{{$licenciatura->nombre}}</td>
            @if($licenciatura->coordinador)
                <td>{{$licenciatura->coordinador->nombre}}</td>

          @else
            <td></td>

        @endif
            <td>
              <a href="{{route('licenciaturas.show',$licenciatura)}}" class="btn btn-primary"><span class="glyphicon glyphicon-book"></span> </a>
            </td>
            <td>
              <a href="{{route('licenciaturas.edit',$licenciatura)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/licenciaturas/','modelo'=>$licenciatura])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
