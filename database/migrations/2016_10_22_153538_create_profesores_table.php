<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
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
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

         DB::table('profesores')->insert([
            ['matricula' => '1234','nombre'=>'Profesor','fecha_n'=>'1997-10-01','curp'=>'123456789987456321','estado_c'=>'soltero','colonia'=>'centro','calle'=>'abasolo','cp'=>'68000','telefono_c'=>'5112345','celular'=>'9511234556','user_id'=>'3']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}
