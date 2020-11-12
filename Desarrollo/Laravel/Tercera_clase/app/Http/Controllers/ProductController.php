<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\ProductsTypes;
use App\Models\Product;


class ProductController extends Controller
{
    //GET
    public function index(){
        $products=Product::all();
        return view('product.index',compact('products'));
    }
    //GET
    public function create(){
        $companies = Company::all();
        $product_types=ProductsTypes::all();
        return view('product.create',compact('companies','product_types'));


    }

    public function store(Request $request){

        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }

    public function edit($id){
        $product= Product::findOrFail($id);
        $companies = Company::all();
        $product_types=ProductsTypes::all();
        return view('product.edit', compact('product','companies','product_types'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Product::where('id', '=', $id)->update($datosexception);

        return redirect('product')->with('edit', 'Producto Actualizado');

    }

    public function show(){
        $products = Product::get();
        $companies = Company::get();
        $product_types = ProductsTypes::get();
        return view('product.show', compact('products','companies', 'product_types'));
    }


}
