<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class Estudiantecontroller extends Controller
{
    public function index(){
        $estudiante=Estudiante::all();
        return view('Estudiante.index', compact('estudiante'));
    }
    public function create(){
        return view('Estudiante.create');

    }
    public function store(Request $request ){
        $estudiante=Estudiante::create($request->all());
        return redirect()->route('Estudiante.index');
    }
    public function show($idEstudiante){
        $estudiante=Estudiante::find($idEstudiante);
        return view('Estudiante.show',compact('estudiante'));

    }
    public function destroy($idEstudiante){
        Estudiante::find($idEstudiante)->delete();
        return redirect()-> route('Estudiante.index');
    }
    public function edit($idEstudiante){
        $estudiante=Estudiante::find($idEstudiante);
        return view('Estudiante.edit',compact('estudiante'));
    }
    public function update(Request $request,$idEstudiante){
        $estudiante=Estudiante::find($idEstudiante)->update($request->all());
        return redirect()->route('Estudiante.show',$idEstudiante);
    }
}
