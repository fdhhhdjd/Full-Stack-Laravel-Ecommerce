<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminEditAttributesComponent extends Component
{
    public $attribute_id;
    public $name;
    public function mount($attribute_id)
    {

        $attribute = ProductAttribute::find($attribute_id);
        $this->attribute = $attribute->id;
        $this->name = $attribute->name;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
        ]);
    }
    public function updateAttribute()
    {
        $this->validate([
            'name' => 'required',

        ]);
        $pattribute = ProductAttribute::find($this->attribute_id);
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message', 'Attribute has been add successfully');
        return redirect()->route('admin.attributes');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-attributes-component')->layout('layouts.base');
    }
}
