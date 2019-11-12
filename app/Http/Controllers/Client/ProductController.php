<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(6);
        return response()->json($products);
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return response()->json($product);
    }
}
