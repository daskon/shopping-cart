@extends('layouts.master')

@section('title')
  Shopping Cart Items
@endsection

@section('content')
<br><br>
   @if(Session::has('cart'))
     <div class="row">
           <div class="col-sm-6 col-md-auto col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                   @foreach($products as $product)
                      <li class="list-group-item">
                        <span class="badge badge-info">{{ $product['qty'] }}</span>
                        <strong> &nbsp;&nbsp;{{ $product['item']['title'] }}</strong>
                        <span class="label label-success">(  {{ $product['price'] }} USD )</span>
                         <div class="btn-group">
                          <button type="button" class="btn btn-info btn-xs dropdown-toggle" 
                             data-toggle="dropdown" aria-haspopup="true">
                             Action <span class="caret"></span>
                          </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="{{route('product.reduceByOne',
                                 ['id' => $product['item']['id']])}}">Reduce by 1</a>
                                 <a class="dropdown-item"  href="{{ route('product.removeItem',
                                 ['id' => $product['item']['id']]) }}">Reduce All</a>
                             </div>
                         </div>
                      </li>
                   @endforeach
                </ul>
           </div>
    </div>
    <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
           </div>
    </div>
    <hr>
    <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
           </div>
    </div>
   @else
     <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Cart is empty !</h2>
           </div>
    </div>
   @endif

@endsection