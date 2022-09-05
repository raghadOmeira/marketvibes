@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped table-hover">
    <thead>
        <th>#</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Category</th>
        <th>tag</th>
        <th>color</th>
        <th>size</th>
        <th>publication Status</th>
        <th>Process</th>
    </thead>
    <tbody>
        @foreach($products as $key => $item)
        <tr>
            <td>{{ $key = $key  + 1 }}</td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->product_price }}</td>
            <td >{{ $item->description }}</td>
            <td>{{ $item->category->category_name }}</td>
            <td>{{ $item->tag->tag_name }}</td>
            <td>{{ $item->product_color }}</td>
            <td>{{ $item->product_size }}</td>
            <td>{{ $item->publication_status }}</td>
            <td style="display: flex; justify-content: center; align-items:center" height="90px">
                <form action="products/{{$item->id}}" method="POST">{{ Method_field("DELETE") }}
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            <a href="/products/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
    {{ $products->links() }}
    <a href="/products/create" class="btn btn-primary">New Product</a>
</div>
@endsection
