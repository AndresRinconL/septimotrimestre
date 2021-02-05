<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Estudiante;
use App\Models\Ficha;
use Illuminate\Http\Request;

class programacontroller extends Controller
{
    public function index(){
        $programa=Progrmaformacion::all();
        return view('programa.index', compact('programa'));
    }
    public function create(){
        return view('programa.create');

    }
    public function store(Request $request ){
        $programa=Progrmaformacion::create($request->all());
        return redirect()->route('programa.index');
    }
    public function show($id){
        $programa=Progrmaformacion::find($id);
        return view('programa.show',compact('programa'));

    }
    public function destroy($id){
        $programa=Progrmaformacion::find($id)->delete();
        return redirect()-> route('programa.index');
    }
    public function edit($id){
        $programa=Progrmaformacion::find($id);
        return view('programa.edit',compact('programa'));
    }
    public function update(Request $request,$id){
        $programa=Progrmaformacion::find($id)->update($request->all());
        return redirect()->route('programa.show',$id);
    }
    public function info($id){
        $programa=Progrmaformacion::find($id);
        $instructor=Instructor::all();
        $estudinte=Estudiante::all();
        return view ('principal.programa',compact('instructor','ficha','estudiante'));


    }
}
