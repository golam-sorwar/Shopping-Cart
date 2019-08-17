<?php

namespace App\Http\Livewire;

use App\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = [
        'productUpdated' => 'noop',
        // 'productRemoved' => 'noop'
    ];

    public function noop()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.cart-counter', [
            'count' => Cart::first()->products()->count()
        ]);
    }
}
