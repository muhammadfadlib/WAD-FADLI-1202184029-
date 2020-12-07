@extends('layout.app')
@section('template')
@if($product=='[]')
<div class="text-center">
    <p>There is no data</p>
    <a href="/insert" class="btn btn-dark">Add product</a>
</div>
@else
<div class="text-center mt-5">
    <h2>List Product</h>
</div>
<a href="/insert" class="btn btn-dark">Add product</a>
<div class="mt-5">
    <table class="table table-borderless text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col"colspan="2">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $data=>$p)
            <tr>
                <th scope="row">{{$data+1}}</th>
                <th colspan="2">{{$p->nama}}</th>
                <th>{{$p->price}}</th>
                <th>
                    <form action="/deleteproduct/{{$p->id}}" method="post">
                    @csrf 
                    @method('delete')
                        <a href="/edit/{{$p->id}}" class="btn btn-primary">Edit</a>
                        <button href="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection