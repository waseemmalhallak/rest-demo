<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index(){
        $cats=ProductCategory::get();
        $products=Product::get();
        return view('welcome',['cats'=>$cats,'products'=>$products]);
    }
}
