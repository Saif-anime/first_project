<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_Controller extends Controller
{
    //


    public function home(){
        return view('welcome');
    }

    public function product(){
        return view('product');
    }
}
