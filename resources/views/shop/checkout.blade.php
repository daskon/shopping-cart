@extends('layouts.master')

@section('title')
  Shopping Cart Items
@endsection

@section('content')
<div class="panel panel-default">
<table class="table">
   <tr>
    <td class="middle">
      <div class="media">
                @if(Session::has('error'))
                <div class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}" id="charge-error">
                  {{ Session::get('error')}}
                </div>
              @endif
              <div class="media-body">
               <h1>Checkout</h1>
              <h4>Your Total: <span style="color:red;"> {{ $total }} USD </span></h4>
              <form action="{{ route('checkout') }}" method="post" id="checkout-form" >
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required >
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control" required >
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <input type="text" id="card-name" class="form-control" required >
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="form-group">
                        <label for="card-number">Credit Card Number</label>
                        <input type="text" id="card-number" class="form-control" required >
                     </div>
                  </div>
                   <div class="col-xs-12">
                    <div class="row">
                            <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-month">Expiration Month</label>
                                <input type="text" id="card-expiry-month" class="form-control" required >
                            </div>
                            </div>
                            <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-year">Expiration Year</label>
                                <input type="text" id="card-expiry-year" class="form-control" required >
                               </div>
                             </div>
                           </div>
                       </div>
                   <div class="col-xs-12">
                     <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" required >
                     </div>
                  </div>
                
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success" >Buy now </button>
              </form>
           </div>
                        </div>
                    </td>
                   
                </tr>

        </table>
    </div>
@endsection

@section('scripts')
   <script src="https://js.stripe.com/v2/" type="text/javascript"></script>
   <script src="{!! asset('js/checkout.js') !!}" type="text/javascript"></script>
@endsection