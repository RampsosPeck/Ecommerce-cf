<?php

namespace Ecommerce\Http\Controllers;

use Illuminate\Http\Request;

use Ecommerce\ProductInShoppingCart;

class ProductInShoppingCartsController extends Controller
{

	public function __construct(){
		$this->middleware('shopping_cart');
	}

    public function store(Request $request)
    {
    	$in_shopping_cart = ProductInShoppingCart::create([
    		'shopping_cart_id' => $request->shopping_cart->id,
    		'producto_id' => $request->producto_id 
    	]);

    	if($in_shopping_cart){
    		return redirect()->back();
    	}else{
    		return redirect()->back()->withErrors(['producto' => 'No se pudo agregar el producto']);
    	}
    }

    public function destroy($id)
    {

    }

}
