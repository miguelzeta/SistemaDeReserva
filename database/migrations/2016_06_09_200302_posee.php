<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee', function (Blueprint $table) {
            $table->string('IdEspecialidad')->unsigned();
            $table->string('RutUsuario')->unsigned();
            $table->dateTime('FechaEgreso');
            $table->string('Institucion')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('IdEspecialidad')->references('IdEspecialidad')->on('especialidad')->onDelete('cascade');
            $table->foreign('RutUsuario')->references('RutUsuario')->on('medico')->onDelete('cascade');

            $table->primary(['IdEspecialidad', 'RutUsuario']);
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
}
