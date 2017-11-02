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
    //
    Route::group(['middleware' => 'admin'], function () {
    	Route::resource('aulas','AulasController');
		Route::resource('licenciaturas','LicenciaturasController');
		Route::resource('coordinadores','CoordinadoresController');
		Route::resource('materias','MateriasController');
    });

    Route::group(['middleware' => 'administrativo'], function () {
    	Route::resource('tutores','TutoresController');
		Route::resource('alumnos','AlumnosController');
    });

    
    Route::group(['middleware' => 'coordinador'], function () {
    	Route::resource('usuarios','UsuariosController');
		Route::resource('grupos','GruposController');
		Route::resource('profesores','ProfesoresController');
	});

    
	Route::group(['middleware' => ['profesor']], function () {
		Route::resource('calificaciones','CalificacionesController');
		Route::get('calificaciones/{idg}/asignar',[
		'uses' => 'CalificacionesController@asignar',
		'as' => 'calificaciones.asignar'
		]);
		Route::resource('horarios','HorariosController');
		Route::get('horarios/{idg}/asignar',[
		'uses' => 'HorariosController@asignar',
		'as' => 'horarios.asignar'
		]);
	});
});



Auth::routes();

Route::get('/home', 'HomeController@index');
