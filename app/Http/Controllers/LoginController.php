<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginPage()
    {
        session(['link' => url()->previous()]);
        return view('auth.login');
    }
}
