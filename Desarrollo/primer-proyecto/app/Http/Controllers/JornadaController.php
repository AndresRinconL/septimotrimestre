<?php

namespace App\Http\Controllers;

use App\Models\Jornada;
use Illuminate\Http\Request;

class JornadaController extends Controller
{
//GET
    public function index(){
        $jornada=Jornada::all();
        return view('Jornada.index',compact('jornada'));
    }
    //GET
    public function create(){
        return view('Jornada.create');
    }
    public function store(Request $request){
        $jornada=Jornada::create($request->all());
        return redirect()->route('Jornada.index');
    }
    public function show($idJornada){
        $jornada=Jornada::find($idJornada);
        return view('Jornada.show',compact('jornada'));
    }
    public function edit($idJornada){
        $jornada=Jornada::find($idJornada);
        return view('Jornada.edit',compact('jornada'));
    }
    public function update(Request $request, $idJornada){
        $jornada=Jornada::find($idJornada)->update($request->all());
        return redirect()->route('Jornada.index');
    }
    public function destroy($idJornada){
        Jornada::find($idJornada)->delete();
        return redirect()->route('Jornada.index');
    }
}
