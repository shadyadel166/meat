@extends('product.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New product</div>
  <div class="card-body">

      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>bio</label></br>
        <input type="text" name="bio" id="bio" class="form-control"></br>
        <label>img</label></br>
        <input type="file" name="img" id="img" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>

  </div>
</div>

@stop
