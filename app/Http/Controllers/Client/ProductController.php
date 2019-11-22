<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use Cart;

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

    public function getProductRelative($categoryId,$id){
        $products = Product::where('category_id',$categoryId)->where('id','!=',$id)->get();
        return response()->json($products);
    }
}
