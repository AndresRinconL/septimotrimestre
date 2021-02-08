<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Instructor;
use App\Models\Jornada;
use App\Models\Ficha;
use App\Models\Programaformacion;
class landingcontroller extends Controller
{
    public function inicio (){

        return view('principal.index');

    }
    public function Instructor()
    {
        return view('Instructor.index');
    }
    public function Estudiante()
    {
        return view('Estudiante.index');
    }
    public function Ficha(){
        return view('Ficha.index');
    }
    public function Programa(){
        return view('Programaformacion.index');
    }
}
