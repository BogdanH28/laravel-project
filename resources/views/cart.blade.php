@extends('layouts.app')

@section('content')
    <h3 class="text-center mb-3">Cart</h3>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span>{{$product['qty']}} x </span>
                            <strong>{{$product['item']['name']}}</strong>
                            <span class="label label-success">{{$product['price']}}</span>
                            <a href="{{route('reduce-by-one', ['id'=>$product['item']['id']])}}">x</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>No items in cart!</h2>
            </div>
        </div>
    @endif
@endsection
