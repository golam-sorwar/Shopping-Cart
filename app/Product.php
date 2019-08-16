<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function cart_pros()
    {
        return $this->hasMany(CartPro::class);
    }
}
