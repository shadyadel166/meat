@extends('Product.app')
@section('content')
    <style>
        .container {
            width: 1080px;
            margin-left: 15%;
        }
    </style>
    <div class="container">
        <table class="table">
            <h2 class="mb-5">recent users</h2>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th >address</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>

                    </tr>
                @endforeach
            </tbody>

        </table>
        @endsection
    </div>






