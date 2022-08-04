<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart as Cart;

use Livewire\Component;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }
    public function destroyCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', "Cart Has been removed");
    }
    public function destroyCarrAll()
    {
        Cart::destroy();
        session()->flash('success_message', "Cart Has been all removed");
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
