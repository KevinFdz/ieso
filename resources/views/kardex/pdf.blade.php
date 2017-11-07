@extends('layouts.pdf')
@section('title','Alumno: '. $alumno->nombre .' Grupo: '.$alumno->grupo->nombre)
@section('content')
@for ($i = 1; $i <= 10; $i++)
  <div class="panel panel-primary">
    <div class= "panel-heading">
      <h1 class="panel-title">Cuatrimestre {{$i}}</h1>
    </div>

    <div class="panel-body">
      <div class="container">
          
          
            
              <table class="table .table-hover .table-striped" >
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
                  <tr class="naranja">
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
@endfor
@endsection