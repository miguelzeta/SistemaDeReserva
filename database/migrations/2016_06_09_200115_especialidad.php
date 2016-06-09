<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Especialidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad', function (Blueprint $table) {
            $table->string('IdEspecialidad')->unique()->notnull();
            $table->string('NombreEspecialidad')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('IdEspecialidad');

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
