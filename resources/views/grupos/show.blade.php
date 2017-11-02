@extends('layouts.cabecera')
@section('title',"Grupo ".$grupo->nombre)
@section('content')
  <a href="{{route('horarios.show',$grupo)}}" class="btn btn-primary">Ver Horario </a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Alumnos</td>

        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          <tr>
            <td>{{$alumno->nombre}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
