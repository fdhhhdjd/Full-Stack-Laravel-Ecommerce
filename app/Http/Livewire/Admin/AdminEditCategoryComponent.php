<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;


class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $scategory_id;
    public $scategory_slug;
    public function mount($category_slug, $scategory_slug = null)
    {
        if ($scategory_slug) {
            $this->scategory_slug = $scategory_slug;
            $scategory = Subcategory::where('slug', $scategory_slug)->first();
            $this->scategory_id = $scategory->id;
            $this->category_id = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;
        } else {
            $this->category_slug = $category_slug;
            $category = Category::where('slug', $category_slug)->first();
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
        }
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required'
        ]);
    }
    public function updateCategory()
    {
        $category = Category::find($this->category_id);
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        if ($this->scategory_id) {
            $scategory = Subcategory::find($this->scategory_id);
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            $scategory->save();
        } else {
            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        return redirect()->route('admin.categories');
    }
    public function render()
    {
        $category = category::all();

        return view('livewire.admin.admin-edit-category-component', ['categories' => $category])->layout('layouts.base');
    }
}
