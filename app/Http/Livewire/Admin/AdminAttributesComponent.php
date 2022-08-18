<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\WithPagination;
use Livewire\Component;

class AdminAttributesComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function deleteAttribute($id)
    {
        $attributes = ProductAttribute::find($id);
        $attributes->delete();
        session()->flash('message', 'Attribute has been Delete successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $pattributes = ProductAttribute::where('name', 'LIKE', $search)->paginate(10);
        return view('livewire.admin.admin-attributes-component', ['pattributes' => $pattributes])->layout('layouts.base');
    }
}
