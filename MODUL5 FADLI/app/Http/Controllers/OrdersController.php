<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function showproduct($id){
        $product=Products::find($id);
        return view('ProsesOrder',compact('product'));
    }
    public function addOrder (Request $request){
        Orders::insert([
            'buyer_name'=>$request->buyer_name,
            'buyer_contact'=>$request->buyer_contact,
            'amount'=>$request->amount,
            'product_id'=>$request->product_id,
            'created_at'=>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
       
        $currentStock = Products::find($request->product_id)->stock;
        Products::where('id',$request->product_id)->update([
            'stock'=>$currentStock-$request->quantity
        ]);
        return redirect('ProsesOrder/'.$request->product_id);
    }
    public function history(){
        $orders = Orders::all();
        return view('history', compact('orders'));
    }
}