@extends('layouts.cabecera')
@section('title','Buscar Calificacion')
@section('content')
  

<div class="table-responsive">
                            <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
                              <thead>
                                <tr>
                                  <td>Aula</td>
                                  <td>Materia</td>
                                  <td>Profesor</td>
                                  <td>Calificaciones</td>
                                </tr>
                              <thead>
                              <tbody>

                                @foreach($horarios as $horario)
                                  <tr>
                                    <td>{{$horario->aula}}</td>
                                    <td>{{$horario->materia}}</td>
                                    <td>{{$horario->profesor}}</td>
                                    <td><a href="{{route('calificaciones.asignar',$horario->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-list-alt"></span> </a></td>
                                   

                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
@endsection
