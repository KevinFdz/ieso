@extends('layouts.cabecera')
@section('title','Horarios')
@section('content')
@for ($i = 1; $i <= 10; $i++)
                          <div class="panel panel-primary">
                            <div class= "panel-heading">
                            <h1 class="panel-title">Cuatrimestre {{$i}}</h1>
                          </div>
                          <div class="panel-body">
                          <div class="container-">
                          <div class="row">
                              
                          <div class="col-xs-12">


                          <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" >
                                  <thead">
                                    <tr>
                                      <td>Nombre</td>
                                      <td>Licenciatura</td>
                                      <td>Cuatrimestre</td>
                                      <td>Turno</td>
                                      <td>Horario</td>
                                      <td>Calificaciones</td>
                                      <td>Alumnos</td>
                                    </tr>
                                  <thead>
                                  <tbody>

                                    @foreach ($grupos as $grupo)
                                      @if($grupo->cuatrimestre == $i and $grupo->status == "Activo")
                                      <tr>
                                        <td>{{$grupo->nombre}}</td>
                                        <td>{{$grupo->licenciatura}}</td>
                                        <td>{{$grupo->cuatrimestre}}</td>
                                        <td>{{$grupo->turno}}</td>
                                        <td><a href="{{route('horarios.show',$grupo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-time"></span></a></td>
                                        <td><a href="{{route('calificaciones.grupo',$grupo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span></a></td>
                                        <td><a href="{{route('grupos.show',$grupo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span></a></td>
                                      </tr>
                                      @endif
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                               </div>
                            </div>
                          </div>   
                        </div>
                        </div>
                        @endfor
@endsection
