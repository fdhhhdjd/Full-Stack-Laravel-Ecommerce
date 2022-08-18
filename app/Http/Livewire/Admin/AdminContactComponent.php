<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\WithPagination;
use Livewire\Component;

class AdminContactComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';

        $contacts = Contact::where('name', 'LIKE', $search)->orWhere('email', 'LIKE', $search)->orWhere('phone', 'LIKE', $search)->paginate(12);
        return view('livewire.admin.admin-contact-component', ['contacts' => $contacts])->layout('layouts.base');
    }
}
