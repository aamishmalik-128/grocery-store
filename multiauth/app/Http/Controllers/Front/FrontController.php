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
}
