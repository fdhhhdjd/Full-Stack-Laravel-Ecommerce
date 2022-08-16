<?php

namespace App\Http\Controllers;

use App\Mail\ForgotEmail;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ForgotController extends Controller
{
    public function postForgot(Request $request)
    {
        $checkEmail = User::where('email', $request->email)->first();

        // dd($token);

        if (!isset($checkEmail)) {
            dd("oke");
            // return;
        }
        Mail::to($request->email)->send(new ForgotEmail($checkEmail));
    }
}
