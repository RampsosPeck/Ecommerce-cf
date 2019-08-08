<?php

namespace Ecommerce\Http\Controllers;

use Illuminate\Http\Request;
use Ecommerce\Http\Resources\ProductosCollection;


class ShoppingCartController extends Controller
{
    

    public function __construct(){
    	$this->middleware('shopping_cart');
    }

    public function show(Request $request){
    	return view('shopping_cart.show',['shopping_cart' => $request->shopping_cart]);
    }

    public function productos(Request $request){
    	return new ProductosCollection($request->shopping_cart->productos()->get());
    }

}
