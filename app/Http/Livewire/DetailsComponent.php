<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

class DetailsComponent extends Component
{
    public $slug;
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        session()->flash('success_message', 'Item added in Cart successfully');
        return redirect()->route('product.cart');
    }
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Products::where('slug', $this->slug)->first();
        $popular_products = Products::inRandomOrder()->limit(4)->get();
        $related_products = Products::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component', ['product' => $product, 'popular_products' => $popular_products, 'related_products' => $related_products])->layout('layouts.base');
    }
}
