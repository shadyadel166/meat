@extends('product.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit product</div>
  <div class="card-body">

      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
        <label>bio</label></br>
        <input type="text" name="bio" id="bio" value="{{$product->bio}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"></br>
        <label>img</label></br>
        <input type="file" name="img" id="img" value="{{$product->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
