<?php

namespace Ecommerce;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $fillable = ['price','title','description','image_url'];

    public function url(){
    	return $this->id ? 'productos.update' : 'productos.store';
    }

    public function method(){
    	return $this->id ? 'PUT' : 'POST';
    }

}
