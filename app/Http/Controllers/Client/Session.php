<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Login;

class Session extends Controller
{
    public function login(Login $request) {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($data))
        {
            return redirect(route('home'));
        }
        else
        {
            return redirect()->back()->withErrors(['Wrong username or password']);
        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        $request->session()->regenerate();

        return redirect(route('home'));
    }
}
