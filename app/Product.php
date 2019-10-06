<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'price'];

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
