<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Products;
use App\Models\Sale;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{

    public function render()
    {
        $lproducts = GetCache('lproducts');
        if (is_null($lproducts)) {

            $lproducts = Products::orderBy('created_at', 'DESC')->get()->take(8);
            SetCache('lproducts', $lproducts);
        }
        $sliders = GetCache('lsliders');
        if (is_null($sliders)) {
            $sliders = HomeSlider::where('status', 1)->get();
            SetCache('lsliders', $sliders);
        }
        // dd($lproducts);
        //Show Latest Products On Homepage
        // $lproducts = Products::orderBy('created_at', 'DESC')->get()->take(8);
        //Admin Show Product Categories On Homepage
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Products::where('sale_price', '>', 0)->get()->take(8);
        $sale = Sale::find(1);
        //Cart take USer

        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
            // Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        return view('livewire.home-component', ['sliders' => $sliders, 'lproducts' => $lproducts, 'categories' => $categories, 'no_of_products' => $no_of_products, 'sproducts' => $sproducts, 'sale' => $sale])->layout('layouts.base');
    }
}
