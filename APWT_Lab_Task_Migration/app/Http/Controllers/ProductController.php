<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function productAdd(){
        return view('pages.productAdd');
    }

    public function productAddSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|max:15',
                'pcode'=>'required|min:3|max:25|numeric',
                'pdes'=>'required|min:2|max:60',
                'category'=>'required||min:1|not_in:Select a category',
                'price'=>'required|min:0|max:25',
                'quantity'=>'required',
                'stockDate'=>'required',
                'rating'=>'required|min:1|max:1|not_in:0',
                'purchased'=>'required|numeric'
            ],
            [
                'name.required'=>'Your product name required',
                'name.min'=>'Your name must be greater than 2 charcters',
                'pcode.required'=>'Your product code required',
                'pcode.min'=>'Your product code must be greater than 0',
                'pcode.max'=>'Your product code must be less than 25',
                'pcode.regex'=>'Your product code format is invalid',
                'pdes.required'=>'Your product description required',
                'category.required'=>'Your product category required',
                'category.not_in'=>'Your product category required',
                'price.required'=>'Your product price required',
                'quantity.required'=>'Your product quantity required',
                'stockDate.required'=>'Your product stock sate required',
                'rating.required'=>'Your product rating required',
                'purchased.required'=>'Your product purchased required'
            ]
        );
            $var = new product();
            $var->p_name= $request->name;
            $var->p_code = $request->pcode;
            $var->p_desc = $request->pdes;
            $var->p_category = $request->category;
            $var->p_price=$request->price;
            $var->p_quantity = $request->quantity;
            $var->p_stock_date = $request->stockDate;
            $var->p_rating = $request->rating;
            $var->p_purchased=$request->purchased;
            $var->save();
        return redirect()->route('productlist');
    }

    public function productDetails(Request $request){

        $id = $request->id;
        $product = Product::where('id',$id)->first();

        return view('pages.productDetails')->with('product', $product);
    }

    public function productEdit(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();

        return view('pages.productEdit')->with('product', $product);       
    }

    public function productEditSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|max:15',
                'pcode'=>'required|min:3|max:25|numeric',
                'pdes'=>'required|min:2|max:60',
                'category'=>'required||min:1|not_in:Select a category',
                'price'=>'required|min:0|max:25',
                'quantity'=>'required',
                'stockDate'=>'required',
                'rating'=>'required|min:1|max:1|not_in:0',
                'purchased'=>'required|numeric'
            ],
            [
                'name.required'=>'Your product name required',
                'name.min'=>'Your name must be greater than 2 charcters',
                'pcode.required'=>'Your product code required',
                'pcode.min'=>'Your product code must be greater than 0',
                'pcode.max'=>'Your product code must be less than 20',
                'pcode.regex'=>'Your product code format is invalid',
                'pdes.required'=>'Your product description required',
                'category.required'=>'Your product category required',
                'category.not_in'=>'Your product category required',
                'price.required'=>'Your product price required',
                'quantity.required'=>'Your product quantity required',
                'stockDate.required'=>'Your product stock sate required',
                'rating.required'=>'Your product rating required',
                'purchased.required'=>'Ypur product purchased required'
            ]
        );

        $var = Product::where('id',$request->id)->first();
        $var->p_name= $request->name;
        $var->p_code = $request->pcode;
        $var->p_desc = $request->pdes;
        $var->p_category = $request->category;
        $var->p_price=$request->price;
        $var->p_quantity = $request->quantity;
        $var->p_stock_date = $request->stockDate;
        $var->p_rating = $request->rating;
        $var->p_purchased=$request->purchased;
        $var->save();
        return redirect()->route('productlist');
    }

    public function productList(){
        // return view('pages.productList');
        $products = Product::all();
        return view('pages.productList')->with('products',$products);
    }

    public function deleteProduct(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('productlist');
    }
}