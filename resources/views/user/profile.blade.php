@extends('layouts.master')


@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-12">
    <h1>Welcome user</h1>
    <hr>
    <h3>Order History</h3>
    @foreach($orders as $order)
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="list-group">
          @foreach($order->cart->items as $item)
             <li class="list-group-item">
               <span class="badge">{{ $item['price'] }} $</span>
               {{ $item['item']['title'] }} | {{ $item['qty'] }} Unit
             </li>
            @endforeach
        </ul>
      </div>
      <div class="panel-footer">Total Price {{$order->cart->totalPrice}}</div>
    </div>
      @endforeach
  </div>
</div>
@endsection