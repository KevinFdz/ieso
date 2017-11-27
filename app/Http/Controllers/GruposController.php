<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Grupo;
use App\Coordinador;
use App\Alumno;
use App\Licenciatura;
use App\Profesor;
use App\Http\Requests;
use App\Http\Requests\GrupoRequest;

class GruposController extends Controller
{
    //
    public function index()
    {
        //Se manda a llamar todas las grupos que existen en la tabla 'grupos' mediante el modelo grupo
        $grupos = Grupo::all();
        //Se manda a llamar la vista index y le pasamos la lista de usuarios que obtuvimos mediante el modelo grupo
        return view('grupos.index')->with('grupos',$grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licenciaturas= Licenciatura::orderBy('nombre','ASC')->pluck('nombre','id');
        //Se crea un objeto vacio del modelo grupo
        $grupo= new Grupo;
        //Se manda a llamar la vista create y le pasamos el objeto vacio que creamos con el modelo grupo
        return view('grupos.create')->with('grupo',$grupo)->with('licenciaturas',$licenciaturas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {
        //Creamos un prodcuto nuevo con el modelo grupo y lo rellenamos con los datos que ingresa el usuario
        $grupo = new Grupo($request->all());
        //Mandamos a guaradar la nueva grupo creada
        $grupo->save();
        //mandamos un mensaje de registro exitoso
        flash('Se ha registrado el grupo '.$grupo->nombre.' con exito, ahora puedes asignar materias','success');
        //Redireccionamos al index
        return redirect()->route('horarios.show',$grupo);
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
        $alumnos = Alumno::where('grupo_id','=',"$id")->get();
        $grupo = Grupo::find($id);
        return view('grupos.show')->with('alumnos',$alumnos)->with('grupo',$grupo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $licenciaturas= Licenciatura::orderBy('nombre','ASC')->pluck('nombre','id');
        //Buscamos la grupo que queremos modificar con el modelo grupo y con el parametro ID que rescibimos
        $grupo = Grupo::find($id);
        //Mandamos a llamar la vista edit y le mandamos la grupo que extragimos de la base mediante el model grupo
        return view('grupos.edit')->with('grupo',$grupo)->with('licenciaturas',$licenciaturas);
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
            'nombre' => 'required|unique:grupos,nombre,'."$id",
            'licenciatura_id' => 'required',
            'cuatrimestre' => 'required',
            'turno' => 'required'
            ]);
        //Buscamos la grupo que vamos a asignar los nuevos valores con el modelo grupo y find
        $grupo= Grupo::find($id);
        //Vaciamos los atributos modificados con fill al registro ya existente
        $grupo->fill($request->all());
        //Guardamos la grupo con los campos ya modificados
        $grupo->save();
        //Redireccionamos al index
        flash('Se ha actualizado el grupo '.$grupo->nombre.' con exito!!','success');
        return redirect()->route('grupos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumnos = Alumno::where('grupo_id','=',"$id")->get();
        foreach ($alumnos as $alumno) {
            $alumno->grupo_id = null;
            $alumno->save();
        }
        /*
        $horarios = Horario::HorariosAnteriores();
        foreach ($horarios as $horario) {
            $horario->grupo_id = null;
            $horario->save();
        }*/
        //Buscamos y eliminaos la grupo que seleccionamos
        Grupo::destroy($id);
        //Redireccionamos al index
        flash('Se ha eliminado el Grupo con exito!!','danger');
        return redirect()->route('grupos.index');
    }

    //Se muestra los gurpos que controla cada coordinacion
    public function GruposCoordinador(){
        $user = User::find(\Auth::user()->id);
        $coordinador = Coordinador::where('user_id', '=', $user->id)->first();
        //$grupo= Grupo::find($profesor->grupo_id);
        
        $id = $coordinador->id;
        $grupos = Grupo::GrupoCoordinador($id);
        return view('grupos.Coordinador')->with('grupos',$grupos);
    }

    //Se manda a llamar la vista para asignar alumnos a los grupos
    public function GrupoAlumnos($idg){
        $grupo = Grupo::find($idg);
        //$alumnos= Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        $alumnos= Alumno::AlumnoGrupo($grupo);
        return view ('grupos.asignar')->with('grupo',$grupo)->with('alumnos',$alumnos);
    }

    //Se obtienen los alumnos y se les asigna el grupo
    public function AsignarAlumnos(Request $request){
        $this->validate($request, [
            'alumnos_id' => 'required'
            ],['alumnos_id.required' => 'Selecciona un Alumno']);
        $alumnos = $_POST['alumnos_id'];
        $grupo = $_POST['idg'];
        foreach ($alumnos as $ida) {
            $alumno = Alumno::find($ida);
            $alumno->grupo_id = $grupo;
            $alumno->save();
        }
        flash('Se añadieron los alumnos al grupo con exito!!','success');
        return redirect()->route('grupos.show',$grupo);

    }

    public function RemoverAlumnoGrupo($ida){
        $alumno = Alumno::find($ida);
        $idg=$alumno->grupo_id; 
        $alumno->grupo_id = null;
        $alumno->save();
        flash('Se removio el alumno '.$alumno->nombre.' del grupo con exito!!','success');
        return redirect()->route('grupos.show',$idg);
    }
}
