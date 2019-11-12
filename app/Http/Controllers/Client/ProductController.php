<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->paginate(6);
        return response()->json( \App\Http\Resources\Product::collection($products));
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return response()->json($product);
    }
}
