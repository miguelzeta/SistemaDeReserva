<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->string('Med_RutUsuario')->unsigned();
            $table->string('RutUsuario')->unsigned();
            $table->string('IdSucursal')->unsigned();
            $table->dateTime('FechaReserva')->notnull();
            $table->dateTime('HoraReserva')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('Med_RutUsuario')->references('RutUsuario')->on('medico')->onDelete('cascade');
            $table->foreign('RutUsuario')->references('RutUsuario')->on('users')->onDelete('cascade');
            $table->foreign('IdSucursal')->references('IdSucursal')->on('sucursal')->onDelete('cascade');

            $table->primary(['Med_RutUsuario','RutUsuario','IdSucursal']);

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
