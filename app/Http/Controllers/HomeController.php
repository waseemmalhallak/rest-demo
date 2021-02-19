<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function index(){
        $cats=ProductCategory::with('products')->get();
        //return view('welcome',['cats'=>$products]);
        echo $cats;
    }
}
