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

        return view('principal.inicio');

    }
    public function Instructor()
    {
        return view('instructor.index');
    }
    public function Estudiante()
    {
        return view('estudiante.index');
    }
    public function Ficha(){
        return view('principal.ficha');
    }
    public function Programa(){
        return view('principal.programa');
    }
}
