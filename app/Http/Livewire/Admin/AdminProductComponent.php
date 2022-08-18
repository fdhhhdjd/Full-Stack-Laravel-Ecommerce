<?php

namespace App\Http\Livewire\Admin;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{

    use WithPagination;
    public $searchTerm;

    public function deleteProduct($id)
    {
        $product = Products::find($id);
        //delete image public
        if ($product->image) {

            unlink('assets/images/products' . '/' . $product->image);
        }
        if ($product->images) {
            $images = explode(",", $product->images);
            foreach ($images as $image) {
                if (!empty($image)) {
                    unlink('assets/images/products' . '/' . $image);
                }
            }
        }
        $product->delete();
        session()->flash('message', 'Product has been Delete successfully!');
        return redirect()->route('admin.products');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $products = Products::where('name', 'LIKE', $search)->orWhere('stock_status', 'LIKE', $search)->orWhere('regular_price', 'LIKE', $search)->orWhere('sale_price', 'LIKE', $search)->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
