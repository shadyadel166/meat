@extends('products.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">products Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">bio : {{ $products->bio }}</p>
        <p class="card-text">phone : {{ $products->price }}</p>
        <img class="card-text">img : {{ asset($products->image)  }}/>
  </div>
  <hr>
  </div>
</div>
