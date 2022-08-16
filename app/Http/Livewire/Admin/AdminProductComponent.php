<?php

namespace App\Http\Livewire\Admin;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{

    use WithPagination;
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
        $products = Products::paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
