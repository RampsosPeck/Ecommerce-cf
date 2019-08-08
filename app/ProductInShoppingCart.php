<?php

namespace Ecommerce;

use Illuminate\Database\Eloquent\Model;

class ProductInShoppingCart extends Model
{
    protected $fillable = [
    	'shopping_cart_id', 'producto_id'
    ];
}
