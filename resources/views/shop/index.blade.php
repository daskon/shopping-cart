@extends('layouts.master')

@section('title')
  Laravel 5.4 Shopping Cart !
@endsection

@section('content')
 @if(Session::has('success'))
   <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
       <div id="charge-message" class="alert alert-success">
         {{ Session::get('success') }}
       </div>
     </div>
   </div>
 @endif

 @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
           <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="rounded-circle img-responsive" src="{{ $product->imagePath }}" alt="Generic placeholder image" >
                <h2>{{ $product->title }}</h2>
                <p class="description"> {{ $product->description }} </p>
                <p>
                <div class="pull-left price"> {{ $product->price }} USD </div>
                <a class="btn btn-success pull-right" href="{{ route('product.addToCart', ['id' => $product->id]) }}" role="button">Add to cart</a>
                </p>
            </div>
          </div>
        @endforeach
    </div>
 @endforeach

@endsection
