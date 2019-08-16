<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartPro extends Model
{
    protected $fillable = ['cart_id','product_id'];
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
