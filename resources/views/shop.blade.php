
<body>

<div class="container mt-5">
    <h2 class="mb-3">Laravel Add To Shopping Cart Example</h2>

    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
            </a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>

@yield('scripts')
</body>
</html>
