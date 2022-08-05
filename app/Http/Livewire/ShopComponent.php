<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        session()->flash('success_message', 'Item added in Cart successfully');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        if ($this->sorting == 'date') {
            $products = Products::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Products::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Products::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            // $products = Products::paginate(12);
            $products = Products::paginate($this->pagesize);
        }
        $categories = Category::all();
        $popular_products = Products::inRandomOrder()->limit(4)->get();
        return view('livewire.shop-component', ['products' => $products, 'popular_products' => $popular_products, "categories" => $categories])->layout('layouts.base');
    }
}
