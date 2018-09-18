<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $allProducts = Product::all();


        return view('products/index', ['products' => $allProducts]);
        //->with('products', $products);
    }
}