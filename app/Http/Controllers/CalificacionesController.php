<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calificacion;
use App\Alumno;
use App\Horario;
use App\Grupo;
use App\Http\Requests;
use App\Http\Requests\CalificacionRequest;

class CalificacionesController extends Controller
{
    

    public function asignar($idh){
        
        $horario = Horario::HorarioDet($idh);
        $idg=$horario->grupo_id;
        $this->comprobar($idg,$idh);
        
        
        $alumnos = Alumno::AlumnoCalificacion($idg);
        
        
        //dd();
        /*$calificaciones = Calificacion::where('horario_id','=',"$horario")->get();*/
        return view('calificaciones.asignar')->with('alumnos',$alumnos)->with('horario',$horario);   
        }



        public function ver(){
        $alumno = Alumno::AlumnoU();
        $calificaciones = Calificacion::where('alumno_id','=',"$alumno->id")->get();
        return view('calificaciones.ver')->with('calificaciones',$calificaciones);   
        }


    public function crear($ida,$idh){
        $cal = Calificacion::where('alumno_id','=',"$ida")->where('horario_id','=',"$idh")->first();
        if($cal){
            return view('calificaciones.edit')->with('calificacion',$cal);           
            }
        else{
            
            $calificacion = new Calificacion;
            $calificacion->alumno_id = $ida;
            $calificacion->horario_id = $idh;
            $calificacion->user_id = \Auth::user()->id;
            //Mandamos a guaradar la nueva calificacion creada
            $calificacion->save();    
            
            /*$horario = Horario::where('id','=',"$idh")->first();
            return redirect()->route('calificaciones.asignar',$horario->grupo_id);*/

            return view('calificaciones.edit')->with('calificacion',$calificacion);
            }  
        }




    public function index()
    {
        //Se manda a llamar todas las calificaciones que existen en la tabla 'calificaciones' mediante el modelo calificacion
        //$horario= Horario::where('grupo_id','=',"1")->first();
        
        $calificaciones = Calificacion::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo calificacion
        return view('calificaciones.index')->with('calificaciones',$calificaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      //relacion orario en modelo
        $alumno= Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        $horario= Horario::MateriaHorario();
        //Se crea un objeto vacio del modelo calificacion
        $calificacion= new Calificacion;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo calificacion
        return view('calificaciones.create')->with('calificacion',$calificacion)->with('alumno',$alumno)->with('horario',$horario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CalificacionRequest $request)
    {   

        //Creamos un prodcuto nuevo con el modelo calificacion y lo rellenamos con los datos que ingresa el usuario
        $calificacion = new Calificacion($request->all());
        $calificacion->user_id = \Auth::user()->id;
        //Mandamos a guaradar la nueva calificacion creada
        $calificacion->save();
        //Mandamos un mensaje de registro exitoso
        flash('Se ha registrado la calificacion '.$calificacion->alumno_id.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('calificaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Buscamos la calificacion que queremos modificar con el modelo calificacion y con el parametro ID que rescibimos
        $calificacion = Calificacion::find($id);
        //Mandamos a llamar la vista edit y le mandamos la calificacion que extragimos de la base mediante el model calificacion
        return view('calificaciones.edit')->with('calificacion',$calificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        //Buscamos la calificacion que vamos a asignar los nuevos valores con el modelo calificacion y find
        $calificacion= Calificacion::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $calificacion->fill($request->all());
        //Guardamos la calificacion con los campos ya modificados
        $calificacion->save();
        //Redireccionamos al index
        flash('Se ha actualizado la calificación '.$calificacion->alumno_id.' con exito!!','success');
        return redirect()->route('calificaciones.asignar',$calificacion->horario_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la calificacion que seleccionamos
        Calificacion::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado la calificación con exito!!','danger');
        return redirect()->route('calificaciones.index');
    }








    /*
    
    Funciones personalizadas

    */
    



    //Funcion inicializar calificaciones del grupo
    public function inicializar($idg,$idh){
        $alumno = Alumno::where('id','=',"$idg")->first();
        
            $calificacion = new Calificacion;
            $calificacion->horario_id = $idh;
            $calificacion->alumno_id = $alumno->id;
            $calificacion->user_id = \Auth::user()->id;
            $calificacion->save();
        

    }

    //comprar si ya fue inicializado las calificaciones del grupo

    public function comprobar($idg,$idh){
        $alumnos = $this->alumnos($idg);
        foreach($alumnos as $alumno){
        $comprobar = Calificacion::where('horario_id','=',"$idh")->where('alumno_id','=',"$alumno->id")->first();
        if($comprobar){
        }
        else{
            $this->inicializar($alumno->id,$idh);
        }
        }
    }

    //Llama alumno del grupo
    public function alumnos($idg){
        $alumno = Alumno::where('grupo_id','=',"$idg")->get();
        return $alumno;
    }
}
