<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

class ShopComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        session()->flash('success_message', 'Item added in Cart successfully');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        $products = Products::paginate(12);
        $popular_products = Products::inRandomOrder()->limit(4)->get();
        return view('livewire.shop-component', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
