<?php

namespace App\Http\Controllers;

use App\Models\Jornada;
use App\Models\Programaformacion;
use Illuminate\Http\Request;

class programacontroller extends Controller
{
    public function index(){
        //$jornada=Jornada::all();
        $programa=Programaformacion::all();
        return view('Programaformacion.index', compact('programa'));
    }
    public function create(){
        $jornadas = Jornada::all();
        return view('Programaformacion.create',compact('jornadas'));

    }
    public function store(Request $request ){
        $programa=Programaformacion::create($request->all());
        return redirect()->route('Programaformacion.index');
    }
    public function show($idPrograma){
        $programa=Programaformacion::find($idPrograma);
        $jornada = Jornada::all();
        return view('Programaformacion.show',compact('programa','jornada'));

    }
    public function destroy($idPrograma){
        $programa=Programaformacion::find($idPrograma)->delete();
        return redirect()-> route('Programaformacion.index');
    }
    public function edit($idPrograma){
        $programa=Programaformacion::find($idPrograma);
        $jornadas = Jornada::all();
        return view('Programaformacion.edit',compact('programa','jornadas'));
    }
    public function update(Request $request,$idPrograma){
        $programa=Programaformacion::find($idPrograma)->update($request->all());
        return redirect()->route('Programaformacion.show',$idPrograma);
    }
    /*public function info($id){
        $programa=Programaformacion::find($id);
        //$instructor=Instructor::all();
        //$estudiante=Estudiante::all();
        return view ('principal.programa',compact('programa'));


    }*/
}
