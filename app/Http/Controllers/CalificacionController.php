<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calificacion;
use App\Alumno;
use App\Grupo;
use App\Horario;
use App\Profesor;
use App\User;
use App\Http\Requests;
use App\Http\Requests\CalificacionRequest;

class CalificacionesController extends Controller
{
    public function asignar($idg){
        $calificaciones = Calificacion::all();
         $user = User::find(\Auth::user()->id);
        $alumnos = Alumno::where('grupo_id','=',"$idg")->get();
        return view('home')->with('horarios',$horarios);   
        }

    }

    //
    public function index()
    {

       
        //Se manda a llamar todas las calificaciones que existen en la tabla 'calificaciones' mediante el modelo calificacion
        $calificaciones = Calificacion::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo calificacion
        return view('calificaciones.index')->with('calificaciones',$calificaciones)->with('calificaciones',$calificaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(\Auth::user()->id);
        if($user->type == "Profesor" ){
        $profesor = DB::table('profesores')->where('user_id', '=', $user->id)->first();
        //$grupo= Grupo::find($profesor->grupo_id);
        $id = $profesor->id;
        $horarios= Horario::ProfesorHorario($id);
        return view('home')->with('horarios',$horarios);   
        }
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
        $alumnos = Alumno::where('grupo_id','=',$id)->get();
        
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
        //Se declara la validacion
        $this->validate($request, [
            'alumno_id' => 'required',
            'horario_id' => 'required|unique:horarios,horario_id,'."$id"
            ]);
        //Buscamos la calificacion que vamos a asignar los nuevos valores con el modelo calificacion y find
        $calificacion= Calificacion::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $calificacion->fill($request->all());
        //Guardamos la calificacion con los campos ya modificados
        $calificacion->save();
        //Redireccionamos al index
        flash('Se ha actualizado la calificación '.$calificacion->alumno_id.' con exito!!','success');
        return redirect()->route('calificaciones.index');
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
}
