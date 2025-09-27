<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Admin/login');
    }

    public function doLogin(Request $request)
    {
        //echo "hello"; exit;
        $credentials = $request->only('email', 'password');
        //dd($credentials);

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'login' => 'Invalid username or password.',
            ])->withInput();
        }
        //dd(auth()->attempt($credentials));

        

        
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
