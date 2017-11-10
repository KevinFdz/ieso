@extends('layouts.cabecera')
@section('title',''.$coordinador->nombre)
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
                        <td>{{$coordinador->licenciatura->nombre}}</td>
                      </tr>
                      
                         <tr>
                             <tr>
                        <td>Fecha de nacimiento:</td>
                        <td>{{$coordinador->fecha_n}}</td>
                      </tr>
                        <tr>
                        <td>Curp:</td>
                        <td>{{$coordinador->curp}}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:{{$coordinador->user->email}}">{{$coordinador->user->email}}</a></td>
                      </tr>
                        <td>Colonia:</td>
                        <td>{{$coordinador->colonia}}
                        </td>
                           
                      </tr>
                     <tr>
                        <td>Calle:</td>
                        <td>{{$coordinador->calle}}</td>
                      </tr>
                      <tr>
                        <td>Codigo Postal:</td>
                        <td>{{$coordinador->cp}}</td>
                      </tr>
                      <tr>
                        <td>Telefono de Casa:</td>
                        <td>{{$coordinador->telefono_c}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Celular:</td>
                        <td>{{$coordinador->celular}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection