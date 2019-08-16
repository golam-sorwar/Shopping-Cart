<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Cart;
use App\Product;
use App\CartPro;

class CartProduct extends Component
{
    public $id, $name, $price;

    public function add()
    {
        $cart_id=Cart::first();
        CartPro::create(['cart_id' => $cart_id->id, 'product_id' => $this->id]);
        // CartPro::attach($this->id);
    }

    public function mount($product)
    {
        $this->id = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
    }

    public function render()
    {
        return view('livewire.cart-product',[
            'alreadyAdded' => CartPro::where('product_id',$this->id)->exists(),
        ]);
    }
}
