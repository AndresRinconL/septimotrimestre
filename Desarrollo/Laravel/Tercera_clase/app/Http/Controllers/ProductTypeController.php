<?php

namespace App\Http\Controllers;

use App\Models\ProductsTypes;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(){
        $product_types=ProductsTypes::all();
        return view('product_type.index',compact('product_types'));
    }
    //GET
    public function create(){
        return view('product_type.create');
    }

    public function store(Request $request){

        ProductsTypes::create($request->all());
        return redirect()->route('product_type.index');
    }

    public function destroy($id){
        ProductsTypes::find($id)->delete();
        return redirect()->route('product_type.index');
    }

    public function edit($id){
        $product_type = ProductsTypes::findOrFail($id);
        return view('product_type.edit', compact('product_type'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        ProductsTypes::where('id', '=', $id)->update($datosexception);

        return redirect('product_type')->with('edit', 'Categoria Actualizada');

    }
    public function show($id){
        $product_type=ProductsTypes::find($id);
        return view('product_type.show',compact('product_type'));
    }
}
