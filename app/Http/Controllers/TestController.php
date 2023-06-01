<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class TestController extends Controller
{

    public function index()
    {
        return Auth::check() ? "Yes" : "No";
    }

    public function login()
    {
        return view('login');
    }

    public  function verify()
    {

        $email =  Request::input('admin-email');
        $password =  Request::input('admin-password');

        $check =  Auth::attempt(['email' => $email, 'password' => $password]);
        if ($check) {
            return redirect("/contact");
        } else {
            return redirect('/login')->with('message', "Email or password not correct");
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with('message', 'Please login again');
    }
}
