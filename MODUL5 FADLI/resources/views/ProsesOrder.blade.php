@extends('layouts.app')
@section('template')
<div class="text-center mt-5">
    <h2>Order</h2>
</div>
<div class="card mb-3">
    <div class="row no-gutters">
    
        <div class="col-md-6">
            <img src="{{ asset('img/'.$product->img_path)}}" class="card-img" alt="...">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">{{$product->nama}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">Stock : {{$product->stock}}</p>
                <h5 class="card-title">$ {{$product->price}}</h5>
            </div>
        </div>
       
    </div>
</div>

<div>
    <div class="text-center mt-5">
        <h2>Buyer Information</h2>
    </div>
    <form action="./../beli" method="post" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="amount" value="{{$product->price}}">
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="Inputid" name="buyer_name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Contact</label>
            <input type="text" class="form-control" id="Inputid" name="buyer_contact">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Quantity</label>
            <input type="number" class="form-control" id="Inputid" name="quantity">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection