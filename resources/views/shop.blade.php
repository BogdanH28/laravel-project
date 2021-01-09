@extends('layouts.app')

@section('content')
    <h3 class="text-center mb-5">Shop</h3>
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->photo}}" alt="photo" class="img-responsive">
                </div>
                <div class="caption">
                    <h3>{{$product->name}}</h3>
                    <p class="description"> {{$product->description}}</p>
                    <div class="clearfix">
                        <div class="pull-left price">
                            {{$product->price}}
                        </div>
                    </div>
                    <a href="{{route('add-to-cart', ['id'=>$product->id])}}" class="btn btn-success pull-right" role="button">Add to cart</a>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
@endsection
