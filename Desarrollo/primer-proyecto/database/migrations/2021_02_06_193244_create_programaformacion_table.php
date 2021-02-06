<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programaformacion', function (Blueprint $table) {
            $table->id('idPrograma');
            $table->string('nombre',50);
            $table->string('siglas',10);

            //foraneas
            $table->bigInteger('fkJornada')->unsigned();
            //calls
            $table->foreign('fkJornada')->references('idJornada')->on('jornada');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programaformacion');
    }
}
