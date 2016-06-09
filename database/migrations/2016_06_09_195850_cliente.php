<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->string('RutUsuario')->notnull();
            $table->string('IdePrevision')->unsigned();
            $table->string('name')->notnull();
            $table->string('DireccionUsuario')->notnull();
            $table->string('FonoUsuario')->notnull();
            $table->string('email')->notnull();
            $table->string('ApellidoPaternoUsuario')->notnull();
            $table->string('ApellidoMaternoUsuario')->notnull();
            $table->string('ComunaUsuario');
            $table->string('password')->notnull();
            $table->dateTime('FechaNacimientoCliente')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('IdePrevision')->references('IdPrevision')->on('prevision')->onDelete('cascade');

            $table->primary('RutUsuario');
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
