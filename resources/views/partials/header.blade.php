<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="">
          <a class="nav-link" href="{{ route('product.index') }}">
            <img src="{!! asset('image/track-shipment.png') !!}" class="img-responsive" 
               style="width:100px; height:30px; " />
          </a>
        </div>

      <div class="collapse navbar-collapse justify-content-md-center" id="header-navbar">
        <ul class="navbar-nav">
        @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.profile') }}">User Profile</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="btn btn-info" href="{{ route('user.signup') }}">Join</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info" href="{{ route('user.signin') }}">Login</a>
          </li>
        @endif
        </ul>
      </div>
      <a href="{{ route('product.shoppingCart') }}">
      <img src="{!! asset('image/cart-trolley.png') !!}" class="img-responsive" 
               style="width:50px; height:50px; " />
          <span class="badge badge-info">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </i>
      </a>
    </nav>