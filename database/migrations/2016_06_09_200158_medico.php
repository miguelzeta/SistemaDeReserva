<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->string('RutUsuario')->notnull();
            $table->string('IdePrevision')->notnull();
            $table->string('name')->notnull();
            $table->string('DireccionUsuario')->notnull();
            $table->string('FonoUsuario')->notnull();
            $table->string('email')->notnull();
            $table->string('ApellidoPaternoUsuario')->notnull();
            $table->string('ApellidoMaternoUsuario')->notnull();
            $table->string('ComunaUsuario');
            $table->string('password')->notnull();
            $table->string('DetallePerfilMedico')->notnull();
            $table->rememberToken();
            $table->timestamps();

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
