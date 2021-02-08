<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index(){

        $instructor=Instructor::all();
        return view('Instructor.index', compact('instructor'));
    }
    public function create(){
        return view('Instructor.create');
    }
    public function store(Request $request){
        $instructor=Instructor::create($request->all());
        return redirect()->route('Instructor.index');
    }
    public function show($idInstructor){
        $instructor=Instructor::find($idInstructor);
        return view('Instructor.show',compact('instructor'));
    }
    public function edit($idInstructor){
        $instructor=Instructor::find($idInstructor);
        return view('Instructor.edit',compact('instructor'));
    }
    public function update(Request $request, $idInstructor){
        $instructor=Instructor::find($idInstructor)->update($request->all());
        return redirect()->route('Instructor.index');
    }
    public function destroy(Request $request,$idInstructor){
        Instructor::find($idInstructor)->delete();
        //Instructor::find($idInstructor)->forcedelete();
        $request->session()->flash('message','Instructor Desactivado');
        return redirect()->route('Instructor.index');
    }
    public function restore(Request $request,$idInstructor){
        Instructor::onlyTrashed()->find($idInstructor)->restore();
        //$instrurtor= Instructor::withTrashed($idInstructor)->first();
        //$instructor = Instructor::withTrashed()->where('idInstructor', '=', $idInstructor)->first();
        //$instructor ->restore();
        return 'Restablecido';

    }
}
