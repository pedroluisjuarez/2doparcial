<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //(1)¡creacion de la tabla en la base de datos
        //creacion de la tabla >php artisan make:migration 
        //creamos la tablas >php artisan migrate
        schema::create('urlestudiantes2', function(blueprint $table)
        {
            $table->increments('id');
            $table->text('nombre');
            $table->text('apellido');
            $table->text('correo');
            $table->text('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
