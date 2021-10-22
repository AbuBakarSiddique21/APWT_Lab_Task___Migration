@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Stock Date</th>
            <th>Rating</th>
            <th>Purchased</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->p_name}}</td>
                <td>{{$product->p_code}}</td>
                <td>{{$product->p_desc}}</td>
                <td>{{$product->p_category}}</td>
                <td>{{$product->p_price}}</td>
                <td>{{$product->p_quantity}}</td>
                <td>{{$product->p_stock_date}}</td>
                <td>{{$product->p_rating}}</td>
                <td>{{$product->p_purchased}}</td>
                <td><a href="/product/details/{{$product->id}}/{{$product->p_name}}">Details</a></td>
                <td><a href="/product/edit/{{$product->id}}/{{$product->p_name}}">Edit</a></td>
                <td><a href="/product/delete/{{$product->id}}/{{$product->p_name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection