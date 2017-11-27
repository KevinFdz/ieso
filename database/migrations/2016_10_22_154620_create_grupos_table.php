<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('licenciatura_id')->unsigned();
            $table->enum('cuatrimestre',['1','2','3','4','5','6','7','8','9','10'])->nullable();
            $table->enum('turno',['Matutino','Vespertino']);
            $table->enum('status',['Activo','Egresado']);
            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('grupos')->insert([
            ['nombre'=>'ISC','licenciatura_id'=>'1','cuatrimestre'=>'1','turno'=>'Matutino','status'=>'Activo']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
