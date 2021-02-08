<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Estudiante;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id('idEstudiante');
            $table->string('documento', 20);
            $table->string('tipo_doc', 10);
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('correo', 80);
            $table->string('fechaNacimiento',25);
            $table->string('genero',1);
            $table->softDeletes();
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
        Schema::dropIfExists('estudiante');
    }
}
