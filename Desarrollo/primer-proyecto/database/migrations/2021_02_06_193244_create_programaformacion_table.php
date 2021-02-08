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
            $table->string('codigo',25);
            $table->string('nombre',50);
            $table->string('siglas',10);

            //foraneas
            $table->bigInteger('fkJornada')->unsigned();
            //calls
            $table->foreign('fkJornada')->references('idJornada')->on('Jornada')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('programaformacion');
    }
}
