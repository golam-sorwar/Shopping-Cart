<?php

use App\Http\Livewire\CartCounter;
use App\Http\Livewire\CartProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Livewire::component('cart-product',CartProduct::class);
Route::livewire('cart-counter',CartCounter::class); // Livewire::component or Route::livewire both are same

Route::get('/', function () {
    return view('cart',[
        'products' => App\Product::all()
    ]);
});
