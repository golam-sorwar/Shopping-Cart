<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

    protected $table = 'products';

    protected $fillable = ['name', 'price'];

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
