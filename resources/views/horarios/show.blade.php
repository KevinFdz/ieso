@extends('layouts.cabecera')
@section('title','Horario del Grupo: '.$grupo->nombre)
@section('content')
  <a href="{{route('horarios.asignar',$grupo)}}" class="btn btn-primary">Asignar Clase</span> </a>
  <div class="row">
    <h1> </h1>
  </div>
  <div class="table-responsive">
    <table  class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <td>Aula</td>
          <td>Grupo</td>
          <td>Materia</td>
          <td>Profesor</td>
          <td>Lunes</td>
          <td>Martes</td>
          <td>Miercoles</td>
          <td>Jueves</td>
          <td>Viernes</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      <thead>
      <tbody>

        @foreach($horarios as $horario)
          <tr>
            <td>{{$horario->aula}}</td>
            <td>{{$horario->grupo}}</td>
            <td>{{$horario->materia}}</td>
            <td>{{$horario->profesor}}</td>
            <td>{{$horario->lunes_i}} - {{$horario->lunes_f}}</td>
            <td>{{$horario->martes_i}} - {{$horario->martes_f}}</td>
            <td>{{$horario->miercoles_i}} - {{$horario->miercoles_f}}</td>
            <td>{{$horario->jueves_i}} - {{$horario->jueves_f}}</td>
            <td>{{$horario->viernes_i}} - {{$horario->viernes_f}}</td>


            <td>
              <a href="{{route('horarios.edit',$horario)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span> </a>
            </td>

           <td>
              @include('layouts.eliminar',['ruta'=>'/horarios/','modelo'=>$horario])
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
