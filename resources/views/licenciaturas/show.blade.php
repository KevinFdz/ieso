@extends('layouts.cabecera')
@section('title','Licenciatura: '.$licenciatura->nombre)
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
                  </tr>
                </thead>
                <tbody>
                  @foreach ($materias as $materia)
                    @if($materia->cuatrimestre == $i)
                      <tr>
                        <td>{{$materia->nombre}}</td>
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