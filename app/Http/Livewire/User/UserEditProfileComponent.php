<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditProfileComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $mobile;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $newimage;
    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->mobile = $user->profile->mobile;
        $this->image = $user->profile->image;
        $this->line1 = $user->profile->line1;
        $this->line2 = $user->profile->line2;
        $this->city = $user->profile->city;
        $this->province = $user->profile->province;
        $this->country = $user->profile->country;
        $this->zipcode = $user->profile->zipcode;
        $this->newimage = $user->profile->newimage;
    }
    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;

        $user->save();
        $user->profile->mobile = $this->mobile;
        if ($this->newimage) {
            if ($this->image) {
                unlink('assets/images/profile/' . $this->image);
            }
            $imgName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('profile', $imgName);
            $user->profile->image =  $imgName;
        }
        $user->profile->line1 = $this->line1;
        $user->profile->line2 = $this->line2;
        $user->profile->city = $this->city;
        $user->profile->province = $this->province;
        $user->profile->country = $this->country;
        $user->profile->zipcode = $this->zipcode;
        $user->profile->save();
        Delete_cache(Auth::user()->id);
        session()->flash('editprofile', 'Profile has been edit successfully!');
        return redirect()->route('user.profile');
    }
    public function render()
    {
        return view('livewire.user.user-edit-profile-component')->layout('layouts.base');
    }
}
