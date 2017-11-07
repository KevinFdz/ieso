@extends('layouts.pdf')
@section('title','Alumno: '. $alumno->nombre .' Grupo: '.$alumno->grupo->nombre)
@section('content')
  <div class="panel panel-primary">
    <div class= "panel-heading">
      <h1 class="panel-title">Cuatrimestre {{$alumno->cuatrimestre}}</h1>
    </div>

    <div class="panel-body">
      <div class="container">
          
          
            
              <table 
                <thead>
                  <tr>
                    <td>Materia</td>
                    <td>Profesor</td>
                    <td>Parcial 1</td>
                    <td>Parcial 2</td>
                    <td>Ordinario</td>
                    <td>Promedio</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($calificaciones as $calificacion)
                      <tr>
                        <td>{{$calificacion->horario->materia->nombre}}</td>
                        <td>{{$calificacion->horario->profesor->nombre}}</td>
                        <td>{{$calificacion->parcial1}}</td>
                        <td>{{$calificacion->parcial2}}</td>
                        <td>{{$calificacion->ordinario}}</td>
                        <td>{{$calificacion->promedio}}</td>
                      </tr>
                  @endforeach
                  <tr class="naranja">
                    <td>Promedio cuatrimestre</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$promedio}}</td>
                  </tr>
                </tbody>
              </table>
   
      
       
      </div>   
    </div>
  </div>  
@endsection