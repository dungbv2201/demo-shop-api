<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return response()->json( \App\Http\Resources\Product::collection($products));
    }

    public function addCart(){
        Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        dd(Cart::content());
    }
}
