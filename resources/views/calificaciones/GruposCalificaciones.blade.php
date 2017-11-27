@extends('layouts.cabecera')
@section('title','Calificaciones')
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
                                      <td>Calificaciones</td>
                                    </tr>
                                  <thead>
                                  <tbody>

                                    @foreach ($grupos as $grupo)
                                      @if($grupo->cuatrimestre == $i)
                                      <tr>
                                        <td>{{$grupo->nombre}}</td>
                                        <td>{{$grupo->licenciatura->nombre}}</td>
                                        <td>{{$grupo->cuatrimestre}}</td>
                                        <td>{{$grupo->turno}}</td>
                                        <td><a href="{{route('calificaciones.grupo',$grupo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span></a></td>
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
