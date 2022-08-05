<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $about_array = array(
            array(
                'image' => 'tai1.jpg',
                'name' => 'leona',
                'title' => 'Director',
                'desc' => 'Contrary to popular belief, Lorem Ipsum is not simply random text...'
            ),
            array(
                'image' => 'tai2.jpg',
                'name' => 'leona',
                'title' => 'Director',
                'desc' => 'Contrary to popular belief, Lorem Ipsum is not simply random text...'
            ),
            array(
                'image' => 'tai3.jpg',
                'name' => 'leona',
                'title' => 'Director',
                'desc' => 'Contrary to popular belief, Lorem Ipsum is not simply random text...'
            ),
            array(
                'image' => 'tai4.jpg',
                'name' => 'leona',
                'title' => 'Director',
                'desc' => 'Contrary to popular belief, Lorem Ipsum is not simply random text...'
            ),
            array(
                'image' => 'tai5.jpg',
                'name' => 'leona',
                'title' => 'Director',
                'desc' => 'Contrary to popular belief, Lorem Ipsum is not simply random text...'
            ),


        );

        return view('livewire.about-component', ['about_array' => $about_array])->layout('layouts.base');
    }
}
