<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class fichacontroller extends Controller
{
    public function index(){
        $ficha=Ficha::all();
        return view('ficha.index', compact('ficha'));
    }
    public function create(){
        return view('ficha.create');

    }
    public function store(Request $request ){
        $ficha=Ficha::create($request->all());
        return redirect()->route('ficha.index');
    }
    public function show($id){
        $ficha=Ficha::find($id);
        return view('ficha.show',compact('ficha'));

    }
    public function destroy($id){
        $ficha=Ficha::find($id)->delete();
        return redirect()-> route('ficha.index');
    }
    public function edit($id){
        $ficha=Ficha::find($id);
        return view('ficha.edit',compact('ficha'));
    }
    public function update(Request $request,$id){
        $ficha=Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.show',$id);
    }
}
