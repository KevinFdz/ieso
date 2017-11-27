<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='grupos';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['nombre','licenciatura_id','profesor_id','cuatrimestre','turno','status','user_id'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */


     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener profesor como tutor "
    public function tutor(){
        return $this->belongsTo('App\Profesor');
    }

     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener una especialidad "
    public function licenciatura(){
        return $this->belongsTo('App\Licenciatura');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchos alumnos"
    public function alumnos(){
        return $this->hasMany('App\Alumno');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchos horarios"
    public function horarios(){
        return $this->hasMany('App\Horario');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchas aulas"
    public function aulas(){
        return $this->hasManyThrought('App\Aula','App\Horario');
    }

    //Se declara relacion muchos a muchos con grupos "Un grupo puede tener muchas horas"
    public function horas(){
        return $this->hasManyThrought('App\Hora','App\Horario');
    }

    //Se declara relacion muchos a muchos con Materias "Un grupo puede tener muchas materias"
    public function materias(){
        return $this->hasManyThrought('App\Materia','App\Horario');
    }

    //Se declara relacion muchos a muchos con  Profesores "Un grupo puede tener muchos profesores"
    public function profesores(){
        return $this->hasManyThrought('App\Profesor','App\Horario');
    }

    //Se declara la relacion uno a uno con Usuario "Un usuario solo puede pertenecer a un grupo"
    public function user(){
       return $this->hasOne('App\User');
    }

    public static function GrupoCoordinador($id){
        $grupos = Grupo::join('licenciaturas','licenciaturas.id','=','grupos.licenciatura_id')
        ->orderBy('id','ASC')
        ->where('grupos.licenciatura_id','=',"$id")
        ->get([
            'grupos.id',
            'licenciaturas.nombre as licenciatura',
            'grupos.nombre as nombre',
            'grupos.cuatrimestre as cuatrimestre',
            'grupos.status as status',
            'grupos.turno as turno',
            ]);
        return $grupos;
    }

     public static function GrupoAlumno($id){
        $Grupo = Grupo::join('alumnos','alumnos.grupo_id','=','grupos.id')
        ->join('horarios','horarios.grupo_id','=','grupos.id')
        ->leftjoin('calificaciones','calificaciones.horario_id','=','horarios.id')
        ->orderBy('id','ASC')
        ->where('horarios.id','=',"$id")
        ->get([
            'horarios.id',
            'alumnos.id as alumno_id',
            'alumnos.nombre as nombre',
            'grupos.id as grupo_id',
            'grupos.nombre as grupo',
            'calificaciones.parcial1 as parcial1',
            'calificaciones.parcial2 as parcial2',
            'calificaciones.ordinario as ordinario',
            'calificaciones.promedio as promedio',
            'horarios.materia_id as materia_id',
            ]);
        return $Grupo;
    }

   
}
