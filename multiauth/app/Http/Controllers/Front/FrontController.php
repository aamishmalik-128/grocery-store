<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function  index (){
        return view ('front.home');
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
         return view('front.products');
    }
    function product($slug){
        return view('front.single_product',compact('slug'));
    }
}
