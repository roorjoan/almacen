@extends('layouts.app')

@section('title', $msg)

@section('content')

    <h1 class="mb-3 text-center">{{ $msg }} - <strong class="text-success">{{ $total }}</strong></h1>
    <table id="myDataTable" class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">code</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">existence</th>
                <th scope="col">active</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->existence }}</td>
                    <td>{{ $product->active }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
