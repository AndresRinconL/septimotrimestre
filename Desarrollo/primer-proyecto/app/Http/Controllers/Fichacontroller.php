<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Ficha;
use App\Models\Instructor;
use App\Models\Jornada;
use App\Models\Programaformacion;
use Illuminate\Http\Request;

class fichacontroller extends Controller
{
    public function index(){

        $ficha=Ficha::all();

        return view('Ficha.index', compact('ficha'));
    }
    public function create(){
        $instructores = Instructor::all();
        $programas = Programaformacion::all();
        return view('Ficha.create', compact('instructores','programas'));

    }
    public function store(Request $request ){
        $ficha=Ficha::create($request->all());
        return redirect()->route('Ficha.index');
    }
    public function show($idFicha){
        $ficha=Ficha::find($idFicha);
        $instructores = Instructor::all();
        $programas = Programaformacion::all();
        return view('Ficha.show',compact('ficha','instructores','programas'));

    }
    public function destroy($idFicha){
        Ficha::find($idFicha)->delete();
        return redirect()-> route('Ficha.index');
    }
    public function edit($idFicha){
        $ficha=Ficha::find($idFicha);
        $instructores = Instructor::all();
        $programas = Programaformacion::all();
        return view('Ficha.edit',compact('ficha','instructores','programas'));
    }
    public function update(Request $request,$idFicha){
        $ficha=Ficha::find($idFicha)->update($request->all());
        return redirect()->route('Ficha.show',$idFicha);
    }
    public function restore(Request $request,$idFicha)
    {
        Ficha::onlyTrashed()->find($idFicha)->restore();
        //$instrurtor= Instructor::withTrashed($idInstructor)->first();
        //$instructor = Instructor::withTrashed()->where('idInstructor', '=', $idInstructor)->first();
        //$instructor ->restore();
        return 'Restablecido';
    }
    public function destory(Request $request,$idFicha){
        Ficha::find($idFicha)->delete();
        return redirect()->route('Ficha.index');
    }
}
