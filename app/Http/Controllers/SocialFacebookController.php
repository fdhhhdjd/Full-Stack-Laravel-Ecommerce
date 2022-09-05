<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialFacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        try {
            // $users = Socialite::driver('facebook')->user();
            $users = Socialite::driver('facebook')->stateless()->user();
            $user = User::where('email', $users->email)->first();
            if (isset($user)) {
                Auth::login($user);
                // return redirect(session('link'));
                return redirect()->route('/');
            } else {
                $newUser = User::create([
                    'name' => $users->name,
                    'email' => $users->email,
                    'google_id' => $users->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect()->route('user.dashboard');
            }
        } catch (Exception $e) {
            return redirect('/');
        }
    }
}
