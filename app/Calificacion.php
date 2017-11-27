<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //Se declara la tabla con la cual va a trabajar el model
	protected $table= 'calificaciones';
    /*Declarocion de los datos que se pueden editar
    Nombre
    */
    protected $fillable=['alumno_id','horario_id','parcial1','parcial2','ordinario','promedio','nota'];


    public function user(){
		return $this->belongsTo('App\User');
	}

    //Se de clara relacion muchos a muchos con materias, llamando al modelo Materia
	public function alumno(){
		return $this->belongsTo('App\Alumno');
	}

	//Se declara la relacion uno a uno con reticulas "Solo se puede tener una calificaion de una materia por reticula"
	public function reticula(){
		return $this->belongsTo('App\Reticula');
	}

	//Se declara la relacion muchos a uno con horarios "Una calificacion solo puede tener un horario "
	public function horario(){
		return $this->belongsTo('App\Horario');
	}

	public function CalificacionesActuales($alumno){
	        $calificaciones = Calificacion::join('horarios','horarios.id','=','califiaciones.horario_id')
	        ->join('grupos','grupos.id','=','horarios.grupo_id')
	        ->join('materias','materias.id','=','horarios.materia_id')
	        ->join('profesores','profesores.id','=','horarios.profesor_id')
	        ->orderBy('id','ASC')
	        ->where('horarios.grupo_id','=',"$grupo->id")
	        ->where('materias.cuatrimestre','=',"$grupo->cuatrimestre")
	        ->get([
	            'horarios.id',
	            'aulas.nombre as aula',
	            'grupos.cuatrimestre as cuatrimestre_g',
	            'grupos.nombre as grupo',
	            'materias.nombre as materia',
	            'materias.cuatrimestre as cuatrimestre',
	            'profesores.nombre as profesor',
	            'horarios.lunes_i',
	            'horarios.lunes_f',
	            'horarios.martes_i',
	            'horarios.martes_f',
	            'horarios.miercoles_i',
	            'horarios.miercoles_f',
	            'horarios.jueves_i',
	            'horarios.jueves_f',
	            'horarios.viernes_i',
	            'horarios.viernes_f',
	            ]);
	        return $horarios;

	}
 }
