@extends('layouts.cabecera')
@section('title','Horario')
@section('content')
  <a href="{{route('horarios.asignar',$grupo)}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus">Materia</span> </a>
  <div class="table-responsive">
    <table  class="horario" id="horario">
      <thead>
        <tr>
          <td>Hora</td>
          <td>Lunes</td>
          <td>Martes</td>
          <td>Miercoles</td>
          <td>Jueves</td>
          <td>Viernes</td>
          <td>Sabado</td>
        </tr>
      <thead>
      <tbody>
        @if($grupo->turno == "matutino")
        <tr>
          <td>7:00</td>
          @foreach($horarios as $horario)
            
            @if($horario->lunes_i == "07:00:00")
            <td id="{{$horario->id}}" onclick = "window.location='{{route('horarios.edit',$horario)}}'">{{$horario->materia}}</td>
            @else
            <td id="lunes7" a href="{{route('horarios.edit',$horario)}}">{{$horario->materia}}</td>
            @endif
            @if($horario->martes_i == "07:00:00")
            <td id="martes7"></td>
            @endif
            @if($horario->miercoles_i == "07:00:00")
            <td id="miercoles7"></td>
            @endif
            @if($horario->jueves_i == "07:00:00")
            <td id="jueves7"></td>
            @endif
            @if($horario->viernes_i == "07:00:00")
            <td id="viernes7"></td>
            @endif
            @if($horario->sabado_i == "07:00:00")
            <td id="sabado7"></td>
            @endif
            @endforeach
        </tr>
        <tr>
            <td>7:50</td>
            <td id="lunes750"></td>
            <td id="martes750"></td>
            <td id="miercoles750"></td>
            <td id="jueves750"></td>
            <td id="viernes750"></td>
            <td id="sabado750"></td>
        </tr>
        <tr>
            <td>8:40</td>
            <td id="lunes840"></td>
            <td id="martes840"></td>
            <td id="miercoles840"></td>
            <td id="jueves840"></td>
            <td id="viernes840"></td>
            <td id="sabado840"></td>
        </tr>
        <tr>
            <td>9:30</td>
            <td colspan="6" align="center">R  e  c  e  s  o</td>
        </tr>
        <tr>
            <td>10:00</td>
            <td id="lunes10"></td>
            <td id="martes10"></td>
            <td id="miercoles10"></td>
            <td id="jueves10"></td>
            <td id="viernes10"></td>
            <td id="sabado10"></td>
        </tr>
        <tr>
            <td>10:50</td>
            <td id="lunes1050"></td>
            <td id="martes1050"></td>
            <td id="miercoles1050"></td>
            <td id="jueves1050"></td>
            <td id="viernes71050"></td>
            <td id="sabado1050"></td>
        </tr>
        <tr>
            <td>11:40</td>
            <td id="lunes1140"></td>
            <td id="martes1140"></td>
            <td id="miercoles1140"></td>
            <td id="jueves1140"></td>
            <td id="viernes1140"></td>
            <td id="sabado1140"></td>
        </tr>
        <tr>
            <td>12:30</td>
            <td id="lunes1230"></td>
            <td id="martes1230"></td>
            <td id="miercoles1230"></td>
            <td id="jueves1230"></td>
            <td id="viernes1230"></td>
            <td id="sabado1230"></td>
        </tr>
        <tr>
            <td>13:20</td>
            <td id="lunes1320"></td>
            <td id="martes1320"></td>
            <td id="miercoles1320"></td>
            <td id="jueves1320"></td>
            <td id="viernes1320"></td>
            <td id="sabado1320"></td>
        </tr>
        <tr>
            <td>14:10</td>
            <td class="celda" id="lunes1410"></td>
            <td class="celda" id="martes1410"></td>
            <td class="celda" id="miercoles1410"></td>
            <td class="celda" id="jueves1410"></td>
            <td class="celda" id="viernes1410"></td>
            <td class="celda" id="sabado1410"></td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection

@section('jquery')
<script>
$(document).ready(function(){
  /*var arrayJS=<?php echo json_encode($horarios);?>;
  $.each(arrayJS, function(arrayJS, array) {
    if(array.lunes_i == "07:00:00"){
      $(#lunes7).text("izi pussy") ;
    }
  });*/
   $('table').on('click', 'td', function(){ 
  
      console.log( 'Valor: ' + $(this).prop('id') );
  });
  $(".celda").mouseover(function() {
$(this).addClass("activo");
});
  $(".celda").mouseout(function() {
$(this).removeClass("activo");
});
});
</script>
@endsection
