@extends('layouts.cabecera')
@section('title',$horario->grupo." ".$horario->materia)
@section('content')
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="mi_tabla">
      <thead>
        <tr>
          <td>Alumno</td>
          <td>Parcial 1</td>
          <td>Parcial 2</td>
          <td>Ordinario</td>
          <td>Promedio</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($alumnos as $alumno)
          @if($alumno->horario_id == $horario->id)
          <tr>
            <td><a href="{{route('calificaciones.crear',array($alumno->id, $horario->id))}}">{{$alumno->nombre}}</td>
            <td>{{$alumno->parcial1}}</td>
            <td>{{$alumno->parcial2}}</td>
            <td>{{$alumno->ordinario}}</td>
            <td>{{$alumno->promedio}}</td>
          </tr>
          @else
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
