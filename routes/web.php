<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
//////////////////////////admin general///////////////////////
    Route::group(['middleware' => 'admin'], function () {
    	Route::resource('aulas','AulasController');
		Route::resource('licenciaturas','LicenciaturasController');
		Route::resource('materias','MateriasController');
		Route::get('fin',[
			'uses' => 'KardexController@Fin',
			'as' => 'fin'
		]);
		Route::get('fin/cuatrimestre',[
			'uses' => 'KardexController@FinCuatrimestre',
			'as' => 'fin.cuatrimestre'
		]);
    });


///////////////////////Administrativo/////////////////////
    Route::group(['middleware' => 'administrativo'], function () {
    	Route::resource('coordinadores','CoordinadoresController');
    	Route::resource('tutores','TutoresController');
		Route::resource('alumnos','AlumnosController');
		Route::get('calificaciones/grupos',[
		'uses' => 'CalificacionesController@GruposCalificaciones',
		'as' => 'calificaciones.grupos'
		]);
		Route::get('grupos/{idg}/remover',[
		'uses' => 'GruposController@RemoverAlumnoGrupo',
		'as' => 'grupos.remover'
		]);
		Route::get('grupos/{idg}/alumnos',[
		'uses' => 'GruposController@GrupoAlumnos',
		'as' => 'grupos.alumnos'
		]);
		Route::post('gruposA',[
		'uses' => 'GruposController@AsignarAlumnos',
		'as' => 'gruposA.store'
		]);
		Route::resource('reticula','KardexController');
    });


//////////////////////////Coordinador//////////////////////////////
    
    Route::group(['middleware' => 'coordinador'], function () {
    	Route::resource('alumnos','AlumnosController');
    	Route::resource('usuarios','UsuariosController');
		Route::resource('grupos','GruposController');
		Route::get('grupo/coordinador',[
		'uses' => 'GruposController@GruposCoordinador',
		'as' => 'grupo.coordinador'
		]);
		Route::resource('profesores','ProfesoresController');
		Route::get('calificacion/{ida}/calificacion',[
		'uses' => 'CalificacionesController@verCalificacionA',
		'as' => 'calificacion.calificacion'
		]);
		Route::post('kardex/kardex',[
			'uses' => 'KardexController@verKardex',
			'as' => 'kardex.kardex'
		]);
		Route::get('kardex/{ida}/alumno',[
			'uses' => 'KardexController@verKardexA',
			'as' => 'kardex.alumno'
		]);
		Route::get('kardex/buscar',[
			'uses' => 'KardexController@buscarKardex',
			'as' => 'kardex.buscar'
			]);
		Route::post('alumno/buscar',[
				'uses' => 'AlumnosController@buscarAlumno',
				'as' => 'alumno.buscar'
			]);
		Route::get('calificaciones/{ida}/pdf',[
				'uses' => 'CalificacionesController@pdf',
				'as' => 'calificaciones.pdf'
			]);
		Route::get('kardex/{ida}/pdf',[
					'uses' => 'KardexController@pdf',
					'as' => 'kardex.pdf'
			]);
		Route::get('calificaciones/{idg}/grupo',[
					'uses' => 'CalificacionesController@CalificacionesGrupo',
					'as' => 'calificaciones.grupo'
			]);
	});

    ///////////////////////////Profesor/////////////////////
	Route::group(['middleware' => ['profesor']], function () {
		Route::resource('calificaciones','CalificacionesController');
		Route::get('calificaciones/{idg}/asignar',[
		'uses' => 'CalificacionesController@asignar',
		'as' => 'calificaciones.asignar'
		]);
		Route::get('calificaciones/{ida}/{idh}/crear',[
			'uses' => 'CalificacionesController@crear',
			'as' => 'calificaciones.crear'
		]);
		
		Route::resource('horarios','HorariosController');
		Route::get('horarios/{idh}/asignar',[
		'uses' => 'HorariosController@asignar',
		'as' => 'horarios.asignar'
		]);

		Route::get('horario/profesor',[
			'uses' => 'HorariosController@HorarioProfesor',
			'as' => 'horarioss.profesor'
		]);
	});


/////////////////////////Alumno///////////////////////
	Route::get('horario/alumno',[
			'uses' => 'HorariosController@HorarioAlumno',
			'as' => 'horarioss.alumno'
		]);
	Route::get('calificacion',[
			'uses' => 'CalificacionesController@ver',
			'as' => 'calificacion'
		]);

	Route::get('calificaciones/{ida}/materias',[
		'uses' => 'CalificacionesController@verMaterias',
		'as' => 'calificaciones.materias'
		]);
	Route::get('calificacion/buscar',[
		'uses' => 'CalificacionesController@buscarCalificacion',
		'as' => 'calificacion.buscar'
		]);

	Route::post('calificaciones/calificacion',[
		'uses' => 'CalificacionesController@verCalificacion',
		'as' => 'calificaciones.calificacion'
		]);

	

	Route::resource('kardexs','KardexController');

	Route::get('kardexx',[
			'uses' => 'KardexController@asignar',
			'as' => 'kardexx'
		]);
	Route::get('kardex',[
			'uses' => 'KardexController@ver',
			'as' => 'kardex'
		]);
	
	
});




Auth::routes();

Route::get('/home', 'HomeController@index');
