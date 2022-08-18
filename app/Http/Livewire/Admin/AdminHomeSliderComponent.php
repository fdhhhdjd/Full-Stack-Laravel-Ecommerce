<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function deleteSlider($id)
    {
        $slider = HomeSlider::find($id);
        $slider->delete();
        session()->flash('message', 'Slider has been Delete successfully!');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $sliders = HomeSlider::where('title', 'LIKE', $search)->orWhere('subtitle', 'LIKE', $search)->orWhere('price', 'LIKE', $search)->orWhere('link', 'LIKE', $search)->paginate(10);

        return view('livewire.admin.admin-home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
