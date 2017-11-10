@extends('layouts.cabecera')
@section('title','Alumno: '.$alumno->nombre.'     Cuatrimestre:'.$alumno->cuatrimestre)
@section('content')
<div class="row"><a href="{{route('calificaciones.pdf',$alumno->id)}}" class="btn btn-primary col-sm-pull-1 col-sm-1 col-sm-push-10"><span class=" glyphicon glyphicon-cloud-download">PDF</span> </a></div>
<div class="row">
   <h1> </h1>
</div>
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <td>Materia</td>
          <td>Profesor</td>
          <td>Parcial 1</td>
          <td>Parcial 2</td>
          <td>Ordinario</td>
          <td>Promedio</td>
          <td>Calificar</td>
        </tr>
      <thead>
      <tbody>

        @foreach ($calificaciones as $calificacion)
          @if($calificacion->horario->grupo->cuatrimestre == $calificacion->horario->materia->cuatrimestre)
          <tr>
            <td>{{$calificacion->horario->materia->nombre}}</td>
            <td>{{$calificacion->horario->profesor->nombre}}</td>
            <td>{{$calificacion->parcial1}}</td>
            <td>{{$calificacion->parcial2}}</td>
            <td>{{$calificacion->ordinario}}</td>
            <td>{{$calificacion->promedio}}</td>
            <td>
              <a href="{{route('calificaciones.edit',$calificacion)}}" class="btn btn-success"><span class="  glyphicon glyphicon-check"></span> </a>
            </td>
          </tr>
          @endif
        @endforeach
        <tr class="success">
          <td>Promedio cuatrimestre</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>{{$promedio}}</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
