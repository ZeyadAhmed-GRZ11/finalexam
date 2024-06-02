<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(){

       $data = Product::all();
       return response()->json(['data'=>$data]);
    }
    public function add(Request $req){

       $data = $req->all();
       $newProd = Product::create($data);
       return response()->json(['data'=>$newProd]);
    }
    public function edit(Request $req, $id){

       $data = $req->all();
       $product = Product::findOrFail($id);
       $product['name'] = $data['name'];
       $product['price'] = $data['price'];
       $product->save();

       return response()->json(['data'=>$product]);
    }
    public function delete(Request $req, $id){

       $data = $req->all();
       $product = Product::findOrFail($id);
       $product->delete();

       return response()->json(['data'=> 'deleted' ]);
    }


}
