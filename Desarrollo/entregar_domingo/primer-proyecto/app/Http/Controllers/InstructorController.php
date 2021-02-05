<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Instructor;

class InstructorController extends Controller
{
    //GET
    public function index(){
        $instructor=Instructor::all();
        return view('Instructor.index',compact('instructors'));
    }
    //GET
    public function create(){
        return view('instructor.create');
    }
    public function store(Request $request){
        $instructor=Instructor::create($request->all());
        return redirect()->route('instructor.index');
    }
    public function show($id){
        $instructor=Instructor::find($id);
        return view('instructor.show',compact('instructor'));
    }
    public function edit($id){
        $instructor=Instructor::find($id);
        return view('instructor.edit',compact('instructor'));
    }
    public function update(Request $request, $id){
        $instructor=Instructor::find($id)->update($request->all());
        return redirect()->route('instructor.index');
    }
    public function destroy($id){
        $instructor=Instructor::find($id)->delete();
        return redirect()->route('instructor.index');
    }
}
