@extends('layouts.cabecera')
@section('title',''.$alumno->nombre)
@section('content')
<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="" src=" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Licenciatura:</td>
                        <td>{{$alumno->licenciatura->nombre}}</td>
                      </tr>
                      <tr>
                        <td>Grupo:</td>
                        @if($alumno->grupo_id)
                          <td>{{$alumno->grupo->nombre}}</td>
                        @else
                          <td></td>
                        @endif
                      </tr>
                      <tr>
                        <td>Cutrimestre:</td>
                        <td>{{$alumno->cuatrimestre}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Fecha de nacimiento:</td>
                        <td>{{$alumno->fecha_n}}</td>
                      </tr>
                        <tr>
                        <td>Curp:</td>
                        <td>{{$alumno->curp}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:{{$alumno->user->email}}">{{$alumno->user->email}}</a></td>
                      </tr>
                        <td>Colonia:</td>
                        <td>{{$alumno->colonia}}
                        </td>
                           
                      </tr>
                     <tr>
                        <td>Calle:</td>
                        <td>{{$alumno->calle}}</td>
                      </tr>
                      <tr>
                        <td>Codigo Postal:</td>
                        <td>{{$alumno->cp}}</td>
                      </tr>
                      <tr>
                        <td>Telefono de Casa:</td>
                        <td>{{$alumno->telefono_c}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Celular:</td>
                        <td>{{$alumno->celular}}</td>
                      </tr>
                        <tr>
                        <td>Status:</td>
                        <td>{{$alumno->status}}</td>
                      </tr>
                    </tbody>
                  </table>
                  @if($alumno->grupo_id)
                  <a href="{{route('horarios.show',$alumno->grupo_id)}}" class="btn btn-primary">Horario</a>
                  @endif
                  <a href="{{route('calificacion.calificacion',$alumno)}}" class="btn btn-primary">Calificaciones</a>
                  <a href="{{route('kardex.alumno',$alumno)}}" class="btn btn-primary">Kardex</a>
                </div>
              </div>
            </div>
@endsection