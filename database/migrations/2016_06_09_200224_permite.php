<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permite', function (Blueprint $table) {
            $table->string('IdPrevision')->unsigned();
            $table->string('IdClinica')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('IdPrevision')->references('IdPrevision')->on('prevision')->onDelete('cascade');
            $table->foreign('IdClinica')->references('IdClinica')->on('clinica')->onDelete('cascade');

            $table->primary(['IdPrevision', 'IdClinica']);
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
