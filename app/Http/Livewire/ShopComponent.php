<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 12;


        $this->min_price = 1;
        $this->max_price = 1000;
    }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        session()->flash('success_message', 'Item added in Cart successfully');
        return redirect()->route('product.cart');
    }
    //Wishlist
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Products');
        //Refetch Page
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        return;
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
    use WithPagination;
    public function render()
    {
        $categories = Category::all();

        //Cart Save USer

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $popular_products = GetCache('popular_products');
        if (is_null($popular_products)) {
            $popular_products = Products::where('featured', 1)->limit(4)->get();
            SetCache('popular_products', $popular_products);
        }

        if ($this->sorting == 'date') {
            // $products = Products::orderBy('created_at', 'DESC')->paginate($this->pagesize);
            $products = Products::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('created_at')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Products::whereBetween('regular_price', [$this->min_price, $this->max_price])->oldest()->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Products::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'desc')->paginate($this->pagesize);
        } else {
            // $products = Products::paginate(12);
            $products = Products::whereBetween('regular_price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        return view('livewire.shop-component', ['products' => $products, 'popular_products' => $popular_products, "categories" => $categories])->layout('layouts.base');
    }
}
