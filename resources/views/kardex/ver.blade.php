@extends('layouts.cabecera')
@section('title','Alumno: '.$alumno->nombre.' Grupo: '.$alumno->grupo->nombre)
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
              <table  class="table table-bordered table-striped table-hover" >
                <thead>
                  <tr>
                    <td>Materia</td>
                    <td>Calificacion</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kardexs as $kardex)
                    @if($kardex->materia->cuatrimestre == $i)
                      <tr>
                        <td>{{$kardex->materia->nombre}}</td>
                        <td>{{$kardex->calificacion}}</td>
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