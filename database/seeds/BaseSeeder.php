<?php

use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*factory(App\User::class, 80)->create()->each(function ($u) {
        $u->Profesor()->save(factory(App\Profesor::class)->make());
        });*/
        /*factory(App\User::class, 7)->create()->each(function ($u) {
        $u->Coordinador()->save(factory(App\Coordinador::class)->make());
        });*/
        
        //factory(App\Grupo::class,12)->create();
        factory(App\Horario::class,80)->create();
        /*factory(App\User::class, 300)->create()->each(function ($u) {
        $u->Alumno()->save(factory(App\Alumno::class)->make());
        });*/
    }

}
