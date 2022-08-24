<?php

namespace App\Http\Livewire\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfileComponent extends Component
{
    public function render()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = GetCache(Auth::user()->id);
        if (is_null($user)) {
            $user = User::select('users.email', 'profiles.image', 'users.name', 'users.user_name', 'profiles.mobile', 'profiles.line1', 'profiles.line2', 'profiles.city', 'profiles.province', 'profiles.country', 'profiles.zipcode')->where('users.id', Auth::user()->id)->join('profiles', 'profiles.user_id', '=', 'users.id')->first();
            // $user = User::find(Auth::user()->id);
            SetCache(Auth::user()->id, $user);
        }
        return view('livewire.user.user-profile-component', ['user' => $user])->layout('layouts.base');
    }
}
