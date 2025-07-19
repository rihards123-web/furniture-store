<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {  // function returns all listings
        return view ('products', [
            'products' => Product::all()
        ]);
    }

    public function show(Product $product) { // function returns single listing
        return view('product', [
            'product' => $product
        ]);
    }
}
