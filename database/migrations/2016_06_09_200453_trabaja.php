<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabaja', function (Blueprint $table) {
            $table->string('IdEspecialidad')->unsigned();
            $table->string('IdSucursal')->unsigned();
            $table->string('RutUsuario')->unsigned();
            $table->dateTime('FechaIngreso')->notnull();
            $table->dateTime('FechaEgreso');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('IdEspecialidad')->references('IdEspecialidad')->on('especialidad')->onDelete('cascade');
            $table->foreign('IdSucursal')->references('IdSucursal')->on('sucursal')->onDelete('cascade');
            $table->foreign('RutUsuario')->references('RutUsuario')->on('medico')->onDelete('cascade');

            $table->primary(['IdEspecialidad', 'IdSucursal','RutUsuario']);
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
