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
    public function show($id){
        $estudiante=Estudiante::find($id);
        return view('Estudiante.show',compact('estudiante'));

    }
    public function destroy($id){
        $estudiante=Estudiante::find($id)->delete();
        return redirect()-> route('Estudiante.index');
    }
    public function edit($id){
        $estudiante=Estudiante::find($id);
        return view('Estudiante.edit',compact('estudiante'));
    }
    public function update(Request $request,$id){
        $estudiante=Estudiante::find($id)->update($request->all());
        return redirect()->route('Estudiante.show',$id);
    }
}
