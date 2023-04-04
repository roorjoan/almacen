@extends('layouts.app')

@section('title', $msg)

@section('content')

    <div>
        <h1 class="mb-3 text-center">
            <a class="me-2 text-danger" style="text-decoration: none" href="{{ route('home') }}">
                <- </a>
                    {{ $msg }} -
                    <strong class="text-success">{{ $total }}</strong>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">code</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">existence</th>
                <th scope="col">category</th>
                <th scope="col">active</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->existence }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->active }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @empty
                <p class="text-danger">No data.</p>
            @endforelse
        </tbody>
    </table>
    <!--to see pagination buttons-->
    <!--blade directive $products->links()-->

@endsection
