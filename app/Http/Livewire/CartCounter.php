<?php

namespace App\Http\Livewire;

use App\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    public function render()
    {
        return view('livewire.cart-counter',[
            'count' => Cart::first()->products()->count()
        ]);
    }
}
