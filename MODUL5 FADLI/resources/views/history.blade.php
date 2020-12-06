@extends('layouts.app')
@section('template')
@if($orders == '[]')
<div class="text-center">
    <p>There is no data</p>
    <a href="/order" class="btn btn-dark">Order Now</a>
</div>
@else
<div class="text-center mt-5">
    <h2>History</h2>
    <div class="mt-5">
        <table class="table table-borderless">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Ammount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $index=>$order)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $order->product->nama }}</td>
                    <td>{{ $order->buyer_name }}</td>
                    <td>{{ $order->buyer_contact }}</td>
                    <td>{{ $order->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection