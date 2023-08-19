<!DOCTYPE html>
<html>
<head>
    <title>product Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    . crossorigin="anonymous">
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>

<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New product">
                        Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bio }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->image }}</td>

                                    <td>
                                        <a href="{{ url('/product' . $item->id) }}" title="View product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/product' . $item->id . '/edit') }}" title="Edit product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete product" onclick="return confirm("Confirm delete?") "><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{--
<div class="card" style="margin:20px;">
<div class="card-header">Create New product</div>
<div class="card-body">

  <form action="{{ url('/product') }}" method="post">
    {!! csrf_field() !!}
    <label>Name</label><br>
    <input type="text" name="name" id="name" class="form-control"><br>
    <label>Address</label><br>
    <input type="text" name="address" id="address" class="form-control"><br>
    <label>Mobile</label><br>
    <input type="text" name="mobile" id="mobile" class="form-control"><br>
    <input type="submit" value="Save" class="btn btn-success"><br>
</form>

</div>
</div>
<div class="card" style="margin:20px;">
    <div class="card-header">Edit product</div>
    <div class="card-body">

        <form action="{{ url('product/'.$product->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
          <label>Name</label><br>
          <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
          <label>Address</label><br>
          <input type="text" name="bio" id="bio" value="{{$product->address}}" class="form-control"></br>
          <label>Mobile</label><br>
          <input type="text" name="mobile" id="mobile" value="{{$product->mobile}}" class="form-control"></br>
          <input type="submit" value="Update" class="btn btn-success"><br>
      </form>

    </div>
  </div>
  <div class="card" style="margin:20px;">
    <div class="card-header">product Page</div>
    <div class="card-body">
          <div class="card-body">
          <h5 class="card-title">Name : {{ $product->name }}</h5>
          <p class="card-text">Address : {{ $product->address }}</p>
          <p class="card-text">Mobile : {{ $product->mobile }}</p>
    </div>

    </div>
  </div> --}}
