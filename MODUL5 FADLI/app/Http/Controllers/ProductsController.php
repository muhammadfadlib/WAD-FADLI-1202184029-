<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function add (Request $request){
        $file = time().'.'.$request->img_path->extension();
        $request->img_path->move(public_path('img/'),$file);
        Products::insert([
            'nama'=>$request->nama,
            'price'=>$request->price,
            'description'=>$request->description,
            'stock'=>$request->stock,
            'img_path'=>$file
        ]);
        return redirect('/product');
    }
    public function display(){
        $product=Products::all();
        return view('product',compact('product'));
    }
    public function hapusproduct($id){
        Products::where ('id',$id)->delete();
        return redirect('/product');
    }
    public function edit($id){
        $product=Products::find($id);
        return view('edit',compact('product'));
    }
    
    public function update($id,Request $request){
        
        if($request->img_path == null){
            Products::where('id',$id)->update([
                'nama'=>$request->nama,
                'price'=>$request->price,
                'description'=>$request->description,
                'stock'=>$request->stock
            ]);
        }else{
            $file = time().'.'.$request->img_path->extension();
            $request->img_path->move(public_path('img/'),$file);
            Products::where('id',$id)->update([
                'nama'=>$request->nama,
                'price'=>$request->price,
                'description'=>$request->description,
                'stock'=>$request->stock,
                'img_path'=>$file
            ]);
        }
        return redirect('/product');  
    }
    public function tampil(){
        $product=Products::all();
        return view('order',compact('product'));
    }
    
}
