@extends('layouts.app')
@section('template')

<div class="text-center">
<h2>Update Product</h>
</div>
<form action="/update/{{$product->id}}" method="post" enctype="multipart/form-data">
    @csrf 
    @method('patch')
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Name</label>
        <input type="text" class="form-control" id="Inputid" name="nama" value="{{$product->nama}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <div class="mb-3">
            <div class="input-group is-invalid">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="validatedInputGroupPrepend">USD</span>
                </div>
                <input type="text" name="price" class="form-control" aria-describedby="validatedInputGroupPrepend"
                    value="{{$product->price}}" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Deskription</label>
        <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Stock</label>
        <input type="number" class="form-control col-md-4" id="Inputid" name="stock" value="{{$product->stock}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image file input</label>
        <div>
            <input type="file" class="form-control-input" id="file" name="img_path">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="submit"class="btn btn-dark">Update</button>
    </div>
</form>
@endsection