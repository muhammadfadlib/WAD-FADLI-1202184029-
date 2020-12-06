@extends('layouts.app')
@section('template')
@if($product=='[]')
<div class="text-center">
    <p>There is no data</p>
    <a href="/insert" class="btn btn-dark">Add product</a>
</div>
@else
<div class="text-center mt-5">
    <h2>Order</h2>
</div>
<div class="row row-cols-1 row-cols-md-3">
    @foreach($product as $data=>$p)
    <div class="col mb-4">

        <div class="card h-100">

            <img src="./img/{{$p->img_path}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$p->nama}}</h5>
                <p class="card-text">{{$p->description}}</p>
                <h4 class="card-title">$ {{$p->price}}</h4>
                <a href="/ProsesOrder/{{$p->id}}" class="btn btn-success">Order Now</a>
            </div>

        </div>

    </div>
    @endforeach
</div>




@endif
@endsection