<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return redirect()->route('index');
        }
        else{
            Session::flash('msg','Tai khoan hoac mat khau sai');
            return  redirect()->back();
        }
    }

    public function showFormRegister()
    {
        return view('customer.register');
    }

    public function register(Request $request)
    {
        $user = $request->only('name','email','password');
        $user['password'] = Hash::make($user['password']);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }
}
