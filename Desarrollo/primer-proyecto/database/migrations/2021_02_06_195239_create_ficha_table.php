<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->id('idFicha');
            $table->string('numFicha', 10);
            $table->string('description',200);
            $table->string('estatus',3);
            //  $table->string('estudianteDoc', 20);
            //Foraneas
            $table->bigInteger('fkInstructor')->unsigned();
            // $table->bigInteger('fkJornada')->unsigned();
            $table->bigInteger('fkEstudiante')->unsigned();
            $table->bigInteger('fkPrograma')->unsigned();
            //calls
            // $table->foreign('fkJornada')->references('idJornada')->on('jornada')
            //   ->onDelete('cascade')
            // ->onUpdate('cascade');

            $table->foreign('fkPrograma')->references('idPrograma')->on('programaformacion');


            $table->foreign('fkInstructor')->references('idInstructor')->on('instructor');


            $table->foreign('fkEstudiante')->references('idEstudiante')->on('estudiante');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha');
    }
}
