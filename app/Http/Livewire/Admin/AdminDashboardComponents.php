<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponents extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-components')->layout('layouts.base');
    }
}
