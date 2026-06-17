<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\ProductCategory;


class FrontController extends Controller
{
    function  index (){
        $product_categories_home =ProductCategory::where('show_on_home',1)
        ->orderBy('name','asc')
        ->get();
        $products = Product::where('show_on_home',1)->get();
        return view ('front.home',compact('product_categories_home','products'));
    }
    function  about (){
        return view ('front.about');
    }
    function contact(){
        return view('front.contact');
    }
    function faq(){
        return view('front.faq');
    }
    function terms(){
        return view('front.terms');
    }
    function privacy(){
        return view('front.privacy');
    }
    function blog(){
        return view('front.blog');
    }

    function post($slug){
        return view('front.post',compact('slug'));
    }

    function products(){
        $product_categories= ProductCategory::orderBy('name','asc')->get();
        $products=Product::where('show_on_home',1)->get();
         return view('front.products',compact('product_categories','products'));
    }
    function product($slug){
        return view('front.single_product',compact('slug'));
    }
    function cart(){
        return view('front.cart');
    }
    function checkout(){
   return view ('front.checkout');
    }
}
