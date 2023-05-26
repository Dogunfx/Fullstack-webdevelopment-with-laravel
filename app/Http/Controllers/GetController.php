<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
