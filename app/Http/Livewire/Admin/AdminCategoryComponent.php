<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been Delete successfully!');
        return redirect()->route('admin.categories');
    }
    public function deleteSubcategory($id)
    {
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message', 'Subcategory has been Deleted successfully!');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $categories = Category::where('name', 'LIKE', $search)->paginate(5);

        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
