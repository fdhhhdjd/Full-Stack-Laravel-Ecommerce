<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Products;
use App\Models\Sale;
use Livewire\Component;
use Illuminate\Support\Facades\Redis;

class HomeComponent extends Component
{

    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();
        //Show Latest Products On Homepage
        $lproducts = Products::orderBy('created_at', 'DESC')->get()->take(8);
        //Admin Show Product Categories On Homepage
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Products::where('sale_price', '>', 0)->get()->take(8);
        $sale = Sale::find(1);
        return view('livewire.home-component', ['sliders' => $sliders, 'lproducts' => $lproducts, 'categories' => $categories, 'no_of_products' => $no_of_products, 'sproducts' => $sproducts, 'sale' => $sale])->layout('layouts.base');
    }
}
