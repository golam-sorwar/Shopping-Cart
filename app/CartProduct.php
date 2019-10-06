<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Cart;
class CartProduct extends Model
{
    protected $table = 'cart_product';

    protected $fillable = ['cart_id', 'product_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
