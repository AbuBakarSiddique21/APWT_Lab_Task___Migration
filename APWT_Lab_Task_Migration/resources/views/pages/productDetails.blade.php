@extends('layouts.app')
@section('content')
    <div >
<!-- <input type="hidden" name="id" value="{{$product->id}}"> -->
        <h1>Product Details</h1>
        <div class="col-md-6 form-group">
            <span>Product Name: {{$product->p_name}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Code: {{$product->p_code}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Description: {{$product->p_desc}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Category : {{$product->p_category}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Price: {{$product->p_price}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Quantity: {{$product->p_quantity}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Stock Date: {{$product->p_stock_date}}</span>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Rating: {{$product->p_rating}}</span><br>
        </div>
        <div class="col-md-6 form-group">
            <span>Product Purchased: {{$product->p_purchased}}</span>
        </div><br>

    </div>
        
@endsection