<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return response()->json( \App\Http\Resources\Product::collection($products));
    }
}
