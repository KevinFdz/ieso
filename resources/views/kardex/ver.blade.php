@extends('layouts.cabecera')
@section('title','Alumno: '.$alumno->nombre)
@section('content')
<div class="row"><a href="{{route('kardex.pdf',$alumno->id)}}" class="btn btn-primary col-sm-pull-1 col-sm-1 col-sm-push-10"><span class=" glyphicon glyphicon-cloud-download">PDF</span> </a></div>
<div class="row">
  <h1> </h1>
</div>
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
                    @if(\Auth::user()->type == "Admin")
                    <td>Calificar</td>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kardexs as $kardex)
                    @if($kardex->materia->cuatrimestre == $i)
                      <tr>
                        <td>{{$kardex->materia->nombre}}</td>
                        <td>{{$kardex->calificacion}}</td>
                        @if(\Auth::user()->type == "Admin")
                        <td>
                          <a href="{{route('reticula.edit',$kardex)}}" class="btn btn-success"><span class="  glyphicon glyphicon-check"></span> </a>
                        </td>
                        @endif
                      </tr>
                    @endif
                  @endforeach
                  <tr class="success">
                    <td>Promedio cuatrimestre</td>
                    <td>
                    @if($promedio[$i])
                   {{$promedio[$i]}}
                    @endif
                  </td>
                  </tr>
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