<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Horario;
use App\Aula;
use App\Grupo;
use App\User;
use App\Materia;
use App\Alumno;
use App\Profesor;
use App\Licenciatura;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Alumno
        $user = User::find(\Auth::user()->id);
        if($user->type == "Alumno" ){
        $alumno = DB::table('alumnos')->where('user_id', '=', $user->id)->first();
        $grupo= Grupo::find($alumno->grupo_id);
        $id = $grupo->id;
        $horarios= Horario::GrupoHorario($id);
        return view('home')->with('horarios',$horarios)->with('grupo',$grupo);
        }



        //Profesor
        elseif($user->type == "Profesor" ){
        $profesor = DB::table('profesores')->where('user_id', '=', $user->id)->first();
        //$grupo= Grupo::find($profesor->grupo_id);
        $id = $profesor->id;
        $horarios= Horario::ProfesorHorario($id);
        return view('home')->with('horarios',$horarios);   
        }




        //Cordinador
        elseif($user->type == "Coordinador" ){
        $coordinador = DB::table('coordinadores')->where('user_id', '=', $user->id)->first();
        //$grupo= Grupo::find($profesor->grupo_id);
        
        $id = $coordinador->id;
        $grupos = Grupo::GrupoCoordinador($id);
        return view('home')->with('grupos',$grupos);   
        }
        else{
        return view('home');       
        }
    }
}
