<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');

            $table->enum('type',['Admin','Profesor','Coordinador','Alumno','Administrativo']);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['nombre' => 'Admin','email'=>'admin@admin.com','password'=>bcrypt(1234),'type'=>'Admin'],
            ['nombre' => 'Coordinador','email'=>'Coordinador@cordinador.com','password'=>bcrypt(1234),'type'=>'Coordinador'],
            ['nombre' => 'Profesor','email'=>'profesor@profesor.com','password'=>bcrypt(1234),'type'=>'Profesor'],
            ['nombre' => 'Alumno','email'=>'alumno@alumno.com','password'=>bcrypt(1234),'type'=>'Alumno'],
            ['nombre' => 'Administrativo','email'=>'administrativo@administrativo.com','password'=>bcrypt(1234),'type'=>'Administrativo']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
