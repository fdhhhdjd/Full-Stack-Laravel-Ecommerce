<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function postreset(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
    }
    public function resetviewpassword(Request $request)
    {
        $email = $request->email;
        return view('viewEmail.reset', ['email' => $email]);
    }
}
