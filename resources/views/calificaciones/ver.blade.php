@extends('layouts.cabecera')
@section('title','Calificaciones')
@section('content')
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Materia</td>
          <td>Parcial 1</td>
          <td>Parcial 2</td>
          <td>Ordinario</td>
          <td>Promedio</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($calificaciones as $calificacion)
          <tr>
            <td>{{$calificacion->horario->materia->nombre}}</td>
            <td>{{$calificacion->parcial1}}</td>
            <td>{{$calificacion->parcial2}}</td>
            <td>{{$calificacion->ordinario}}</td>
            <td>{{$calificacion->promedio}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
