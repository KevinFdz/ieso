<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    //Se delcara la tabla de la base de datos en la que se va a trabajar
    protected $table='kardex';
    //Se definen los campos con los que se van a trabajar(Agregar,Editar,Eliminar,ostrar)
    protected $fillable=['alumno_id','materia_id','calificacion'];

    /*
      Se declara las relaciones que tiene con otras tablas
    */


     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener profesor como tutor "
    public function alumno(){
        return $this->belongsTo('App\Alumno');
    }

     //Se declara relacion uno a muchos con grupos "Un grupo solo puede tener una especialidad "
    public function materia(){
        return $this->belongsTo('App\Materia');
    }

  
}
