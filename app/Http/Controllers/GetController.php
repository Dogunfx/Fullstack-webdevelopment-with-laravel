<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GetController extends Controller
{
    //

    public function HomeHandler()
    {
        return view('home');
    }

    public function AboutHandler()
    {
        return view('about');
    }

    public function ContactHandler()
    {
        return view('contact');
    }

    public function RegisterHandler()
    {
        return view('register');
    }


    public function ShowListHandler()
    {

        $query = "SELECT * FROM contactTBL";
        return DB::select($query);
    }

    public function EncryptPasswordHandler()
    {
        return Hash::make('12345');
    }


    public function Login()
    {
        return view('login');
    }
}
