@extends('layouts.cabecera')
@section('title',"Grupo ".$grupo->nombre)
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Alumno</td>
          <td>Ver</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->nombre}}</td>
            <td><a href="{{route('alumnos.show',$alumno)}}" class="btn btn-primary"><span class=" glyphicon glyphicon-eye-open"></span> </a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
