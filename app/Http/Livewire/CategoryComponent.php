<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Products;
use App\Models\Subcategory;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;
    public $scategory_slug;
    public function mount($category_slug, $scategory_slug = null)
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->category_slug = $category_slug;
        $this->scategory_slug = $scategory_slug;
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
        $category_id = null;
        $category_name = "";
        $filter = '';
        if ($this->scategory_slug) {
            $scategory = Subcategory::where('slug', $this->scategory_slug)->first();
            $category_id = $scategory->id;
            $category_name = $scategory->name;
            $filter = "sub";
        } else {
            $category = Category::where('slug', $this->category_slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";
        }
        // $category_id = $category->id;
        // $category_name = $category->name;
        if ($this->sorting == 'date') {
            $products = Products::where($filter . 'category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Products::where($filter . 'category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Products::where($filter . 'category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            // $products = Products::paginate(12);
            $products = Products::where($filter . 'category_id', $category_id)->paginate($this->pagesize);
        }
        $categories = Category::all();
        $popular_products = Products::where('featured', 1)->limit(4)->get();

        return view('livewire.category-component', ['products' => $products, 'popular_products' => $popular_products, "categories" => $categories, 'category_name' => $category_name])->layout('layouts.base');
    }
}
