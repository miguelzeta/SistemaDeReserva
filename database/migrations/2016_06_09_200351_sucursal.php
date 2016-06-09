<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->string('IdSucursal')->unique()->notnull();
            $table->string('IdClinica')->unsigned();
            $table->string('NombreSucursal');
            $table->string('DireccionSucursal')->notnull();
            $table->string('ComunaSucursal')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('IdClinica')->references('IdClinica')->on('clinica')->onDelete('cascade');

            $table->primary('IdSucursal');

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
