@extends('layouts.cabecera')

@section('content')

                <div class="panel-body">
                     @if(Auth::user()->type =='Alumno')
                        <div class="table-responsive">
                            <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
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


                                   

                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                     
                     @elseif(Auth::user()->type =='Profesor')
                            <div class="table-responsive">
                            <table  class="table table-bordered table-striped table-hover" id="mi_tabla">
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
                                  <tr>
                                    <td>{{$horario->aula}}</td>
                                    <td><a href="{{route('calificaciones.asignar',$horario->id)}}">{{$horario->grupo}}</td>
                                    <td>{{$horario->materia}}</td>
                                    <td>{{$horario->profesor}}</td>
                                    <td>{{$horario->lunes_i}} - {{$horario->lunes_f}}</td>
                                    <td>{{$horario->martes_i}} - {{$horario->martes_f}}</td>
                                    <td>{{$horario->miercoles_i}} - {{$horario->miercoles_f}}</td>
                                    <td>{{$horario->jueves_i}} - {{$horario->jueves_f}}</td>
                                    <td>{{$horario->viernes_i}} - {{$horario->viernes_f}}</td>


                                   

                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                     @elseif(Auth::user()->type =='Coordinador')
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
                                    </tr>
                                  <thead>
                                  <tbody>

                                    @foreach ($grupos as $grupo)
                                      @if($grupo->cuatrimestre == $i)
                                      <tr>
                                        <td><a href="{{route('grupos.show',$grupo)}}">{{$grupo->nombre}}</a></td>
                                        <td>{{$grupo->licenciatura}}</td>
                                        <td>{{$grupo->cuatrimestre}}</td>
                                        <td>{{$grupo->turno}}</td>
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
                     @endif
                
     
@endsection
