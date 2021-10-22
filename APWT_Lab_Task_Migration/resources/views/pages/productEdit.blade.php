@extends('layouts.app')
@section('content')
<form action="{{route('editproduct')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <div class="col-md-6 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{$product->p_name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Code</span>
            <input type="text" name="pcode" value="{{$product->p_code}}"class="form-control">
            @error('pcode')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Description</span>
            <input type="text" name="pdes" value="{{$product->p_desc}}" class="form-control">
            @error('pdes')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Category</span>
            <select name="category" id="category" >
                <option value="Select a category" class="form-control" >Select Category</option>
                <option value="TV" @if ($product->p_category == "TV") selected @endif  class="form-control" >TV</option>
                <option value="Laptop" @if ($product->p_category == "Laptop") selected @endif  class="form-control">Laptop</option>
                <option value="Mobile" @if ($product->p_category == "Mobile") selected @endif class="form-control">Mobile</option>
              </select><br>

            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{$product->p_price}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Quantity</span>
            <input name="quantity" type=text value="{{$product->p_quantity}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Stock Date</span>
            <input type="date" name="stockDate" value="{{$product->p_stock_date}}" class="form-control">
            @error('stockDate')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Rating</span><br>
            <input type="radio" id="valueOne" name="rating" @if ($product->p_rating == "1") checked @endif value="1">
            <label for="valueOne">1 </label><br>
            <input type="radio" id="valueTwo" name="rating" @if ($product->p_rating == "2") checked @endif value="2">
            <label for="valueTwo">2</label><br>
            <input type="radio" id="valueThree" name="rating" @if ($product->p_rating == "3") checked @endif value="3">
            <label for="valueThree">3 </label><br>
            <input type="radio" id="valueFour" name="rating" @if ($product->p_rating == "4") checked @endif value="4">
            <label for="valueFour">4 </label><br>
            <input type="radio" id="valueFive" name="rating" @if ($product->p_rating == "5") checked @endif value="5">
            <label for="valueFive">5 </label><br>
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Purchased</span>
            <input type="text" name="purchased" value="{{$product->p_purchased}}" class="form-control">
            @error('purchased')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>



@endsection