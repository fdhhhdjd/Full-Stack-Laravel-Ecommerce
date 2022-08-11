<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $confirm_password;
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
    }
    public function changePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if (Hash::Check($this->current_password, Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('change_password_success', 'Change Password Success!');
        } else {
            session()->flash('change_password_error', 'Password do not math !');
        }
    }
    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
