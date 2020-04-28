<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function product_attributes(){
    	return $this->hasMany(ProductAttribute::class, 'product_id');
    }
}
