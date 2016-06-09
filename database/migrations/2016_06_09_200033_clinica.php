<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clinica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica', function (Blueprint $table) {
            $table->string('IdClinica')->unique()->notnull();
            $table->string('NombreClinica')->notnull();
            $table->rememberToken();
            $table->timestamps();

            $table->primary('IdClinica');
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
