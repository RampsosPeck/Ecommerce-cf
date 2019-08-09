<?php

namespace Ecommerce;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    
    public static function findOrCreateById($shopping_cart_id){
	    if($shopping_cart_id){
	    	return ShoppingCart::find($shopping_cart_id);
	    }else{
	    	return ShoppingCart::create();
	    }
    }

    public function productos(){
    	return $this->belongsToMany('Ecommerce\Producto','product_in_shopping_carts');
    }

    public function productosCount(){
    	return $this->productos()->count();
    }


    public function amount(){
        return $this->productos()->sum('price') / 100;
    }

    public function amountInCents(){
        return $this->productos()->sum('price');
    }

}
