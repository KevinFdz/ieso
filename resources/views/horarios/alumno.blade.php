@extends('layouts.cabecera')
@section('title','Horario')
@section('content')
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
                                </tr>
                              <thead>
                              <tbody>

                                @foreach($horarios as $horario)
                                @if($horario->materia->cuatrimestre == $alumno->cuatrimestre)
                                  <tr>
                                    <td>{{$horario->aula->nombre}}</td>
                                    <td>{{$horario->grupo->nombre}}</td>
                                    <td>{{$horario->materia->nombre}}</td>
                                    <td>{{$horario->profesor->nombre}}</td>
                                    <td>{{$horario->lunes_i}} - {{$horario->lunes_f}}</td>
                                    <td>{{$horario->martes_i}} - {{$horario->martes_f}}</td>
                                    <td>{{$horario->miercoles_i}} - {{$horario->miercoles_f}}</td>
                                    <td>{{$horario->jueves_i}} - {{$horario->jueves_f}}</td>
                                    <td>{{$horario->viernes_i}} - {{$horario->viernes_f}}</td>
                                  </tr>
                                  @endif
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                     
     
@endsection
