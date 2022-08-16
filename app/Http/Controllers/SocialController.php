<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $users = Socialite::driver('google')->user();
            $user = User::where('email', $users->email)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->route('user.dashboard');
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
            return redirect('/login');
        }
    }
}
