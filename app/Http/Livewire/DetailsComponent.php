<?php

namespace App\Http\Livewire;

use App\Models\Products;
use App\Models\Sale;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;
    //Attribute
    public $satt = [];
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, $this->qty, $product_price, $this->satt)->associate('App\Models\Products');
        session()->flash('success_message', 'Item added in Cart successfully');
        return redirect()->route('product.cart');
    }
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }

    //increase detail
    public function increaseQuantity()
    {
        return $this->qty++;
    }
    //decrease
    public function decreaseQuantity()
    {
        if ($this->qty > 1) {

            $this->qty--;
        }
    }
    //Wishlist
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        //Refetch Page
        $this->emitTo('wishlist-count-component', 'refreshComponent');
    }
    public function removeToWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                //Refetch Page
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $product = Products::where('slug', $this->slug)->first();
        $popular_products = Products::where('featured', 1)->limit(4)->get();
        $related_products = Products::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        $sale = Sale::find(1);
        return view('livewire.details-component', ['product' => $product, 'popular_products' => $popular_products, 'related_products' => $related_products, 'sale' => $sale])->layout('layouts.base');
    }
}
