<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //userid
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('nombre');
            $table->date('fecha_n');
            $table->string('curp');
            $table->string('estado_c');
            $table->string('colonia');
            $table->string('calle');
            $table->integer('cp');
            $table->string('telefono_c');
            $table->string('celular');
            $table->integer('licenciatura_id')->unsigned()->nullable();
            $table->enum('cuatrimestre',['1','2','3','4','5','6','7','8','9','10']);
            $table->integer('grupo_id')->unsigned()->nullable();
            $table->enum('status',['Regular','Baja Temporal','Baja Definitiva'])->default('regular');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->timestamps();

        });

        DB::table('alumnos')->insert([
            [
            'matricula' => '123',
            'nombre'=>'Alumno',
            'fecha_n' => '1987-11-01' ,
            'curp'=>'321654987987456321',
            'estado_c'=>'Soltero',
            'colonia'=>'reforma',
            'calle'=>'rosas',
            'cp'=>'68100',
            'telefono_c'=>'5165432',
            'celular'=>'9519876524',
            'licenciatura_id'=>'1',
            'cuatrimestre'=>'1',
            'grupo_id'=>'1',
            'status'=>'regular',
            'user_id'=>'4'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
