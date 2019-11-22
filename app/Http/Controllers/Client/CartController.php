<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return response()->json(Cart::content());
    }

    public function store(Request $request){
//        Cart::add([
//            'id'=>$request->id,
//            'name'=>$request->name,
//            'qty'=>$request->qty,
//            'price'=>$request->price,
//            'options'=>[
//                'image'=>$request->image
//            ]
//        ]);
        $a =Cart::add(['id' => 1, 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
        $a1 =Cart::add(['id' => 1+1, 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
        $a2 =Cart::add(['id' => 1+2, 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
    }

    public function update(Request $request){
        try{
            Cart::update($request->rowId,$request->all());
            return response()->json([
                'message' =>'Update cart successfully!'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'message' =>'Update cart fail!'
            ]);
        }
    }

    public function delete(Request $request){
        try{
            Cart::remove($request->rowId);
            return response()->json([
                'message'=>'Delete successfully!'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'message'=>'Delete fail!'
            ]);
        }
    }
}
