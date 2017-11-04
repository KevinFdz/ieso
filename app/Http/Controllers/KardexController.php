<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;use App\Calificacion;
use App\Kardex;
use App\Alumno;
use App\Horario;
use App\Licenciatura;
use App\Grupo;
use App\Materia;
use App\Http\Requests;

class KardexController extends Controller
{
    
	public function ver(){
        $alumno = Alumno::AlumnoU();
        $kardexs = Kardex::where('alumno_id','=',"$alumno->id")->get();
        return view('kardex.ver')->with('kardexs',$kardexs)->with('alumno',$alumno);   
        }

    public function verKardex(){
        $m = $_POST['matricula'];
        $this->asignar();
        $alumno = Alumno::where('matricula','=',"$m")->first();
        $kardexs = Kardex::where('alumno_id','=',"$alumno->id")->get();
        return view('kardex.ver')->with('kardexs',$kardexs)->with('alumno',$alumno);   
        }


	public function asignar(){
        
        $this->comprobar();

        if(\Auth::user()->type == 'Alumno'){
        	return redirect()->route('kardex');
        }
        
         
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se manda a llamar todas las licenciaturas que existen en la tabla 'licenciaturas' mediante el modelo licenciatura
        $kardexs = Kardex::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo Licenciatura
        return view('kardex.index')->with('kardexs',$kardexs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordinadores= Coordinador::orderBy('nombre','ASC')->pluck('nombre','id');
        //Se crea un objeto vacio del modelo Licenciatura
        $licenciatura= new Licenciatura;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo Licenciatura
        return view('licenciaturas.create')->with('licenciatura',$licenciatura)->with('coordinadores',$coordinadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LicenciaturaRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo Licenciatura y lo rellenamos con los datos que ingresa el usuario
        $licenciatura = new Licenciatura($request->all());
        //Mandamos a guaradar la nueva licenciatura creada
        $licenciatura->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado la Licenciatura '.$licenciatura->nombre.' con exito!!','success');
        //Redireccionamos al index
        return redirect()->route('licenciaturas.index');
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
        $coordinadores= Coordinador::orderBy('nombre','ASC')->pluck('nombre','id');
        //Buscamos la licenciatura que queremos modificar con el modelo Licenciatura y con el parametro ID que rescibimos
        $licenciatura = Licenciatura::find($id);
        //Mandamos a llamar la vista edit y le mandamos la licenciatura que extragimos de la base mediante el model Licenciatura
        return view('licenciaturas.edit')->with('licenciatura',$licenciatura)->with('coordinadores',$coordinadores);
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
        //Se declara la validacion
        $this->validate($request, [
            'nombre' => 'required|unique:licenciaturas,nombre,'."$id"
            ]);
        //Buscamos la licenciatura que vamos a asignar los nuevos valores con el modelo Licenciatura y find
        $licenciatura= Licenciatura::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $licenciatura->fill($request->all());
        //Guardamos la licenciatura con los campos ya modificados
        $licenciatura->save();
        //Redireccionamos al index
        flash('Se ha actualizado la Licenciatura '.$licenciatura->nombre.' con exito!!','success');
        return redirect()->route('licenciaturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscamos y eliminaos la licenciatura que seleccionamos
        Licenciatura::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado la Licenciatura con exito!!','danger');
        return redirect()->route('licenciaturas.index');
    }






    /*
    
    Funciones personalizadas

    */
    
    //comprar si ya fue inicializado las calificaciones del grupo

    public function comprobar(){
        $alumnos = Alumno::all();
        foreach($alumnos as $alumno){
        $comprobar = Kardex::where('alumno_id','=',"$alumno->id")->first();
        if($comprobar){
        	$this->llenarkardex($alumno->id);
        }
        else{
            $this->inicializar($alumno->id);
        }
        }
    }


    //Funcion inicializar calificaciones del grupo
    public function inicializar($ida){
        	$materias = $this->obtenerMaterias($ida);
            
            foreach($materias as $materia){
            $Kardex = new Kardex;
            $Kardex->alumno_id = $ida;
            $Kardex->materia_id = $materia->id;
            $Kardex->save();
        	}

    }


    public function llenarkardex($ida){
    		$alumno = $this->obtenerAlumno($ida);	
    		$materias = $this->obtenerMaterias($ida);	
    		foreach($materias as $materia){
            $horario = Horario::where('materia_id','=',"$materia->id")->where('grupo_id','=',"$alumno->grupo_id")->first();
            if($horario){
            	$calificacion= Calificacion::where('alumno_id','=',"$ida")->where('horario_id','=',"$horario->id")->first();
            	if($calificacion->promedio){
            		$Kardex = Kardex::where('alumno_id','=',"$ida")->where('materia_id','=',"$materia->id")->first();
	            	$Kardex->calificacion = $calificacion->promedio;
	            	$Kardex->save();	
            	}
            	
            }
        	}	
    }


    public function obtenerMaterias($ida){
    	$alumno = $this->obtenerAlumno($ida);
    	$licenciatura = Licenciatura::find($alumno->licenciatura_id);
        $materias = $licenciatura->materias;
    	return $materias;
    }

    //Llama alumno del grupo
    public function obtenerAlumno($ida){
        $alumno = Alumno::where('id','=',"$ida")->first();
        return $alumno;
    }
}
