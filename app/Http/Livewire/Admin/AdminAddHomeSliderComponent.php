<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public function mount()
    {
        $this->status = 0;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->title, '-');
    }
    public function addHomeSlider()
    {
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('sliders', $imageName);
        $slider->image = $imageName;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message', 'Slider has been created successfully!');
        return redirect()->route('admin.homeslider');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
