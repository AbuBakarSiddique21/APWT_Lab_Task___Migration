@extends('layouts.app')
@section('content')
<form action="{{route('addproduct')}}" class="col-md-9" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-6 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Code</span>
            <input type="text" name="pcode" value="{{old('pcode')}}"class="form-control">
            @error('pcode')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Description</span>
            <input type="text" name="pdes" value="{{old('pdes')}}" class="form-control">
            @error('pdes')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Category</span>
            <select name="category" id="category" >
                <option value="Select a category" class="form-control">Select Category</option>
                <option value="TV" class="form-control">TV</option>
                <option value="Laptop" class="form-control">Laptop</option>
                <option value="Mobile" class="form-control">Mobile</option>
              </select><br>

            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Quantity</span>
            <input name="quantity" type=text value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Stock Date</span>
            <input type="date" name="stockDate" value="{{old('stockDate')}}" class="form-control">
            @error('stockDate')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Rating</span><br>
            <input type="radio" id="valueOne" name="rating" value="1">
            <label for="valueOne">1 </label><br>
            <input type="radio" id="valuetwo" name="rating" value="2">
            <label for="valuetwo">2</label><br>
            <input type="radio" id="valuethree" name="rating" value="3">
            <label for="valuethree">3 </label><br>
            <input type="radio" id="valuefour" name="rating" value="4">
            <label for="valuefour">4 </label><br>
            <input type="radio" id="valuefive" name="rating" value="5">
            <label for="valuefive">5 </label><br>
            @error('rating')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Product Purchased</span>
            <input type="text" name="purchased" value="{{old('purchased')}}" class="form-control">
            @error('purchased')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div> <br>
        <input type="submit" class="btn btn-success" value="Add" ><br>
    </form>


@endsection