<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }
    public function soreCategory()
    {
        $data = Category::where('slug', $this->slug)->first();
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        // if (isset($data)) {
        //     return session()->flash('error', 'Category all really');
        // }
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message', 'Category has been created successfully!');
        return redirect()->route('admin.categories');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
