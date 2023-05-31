<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function SendContactPostHandler()
    {
        $address =  Request::input("address");
        $phone =  Request::input("phone");
        $email =  Request::input("email");
        $comment =  Request::input("comment");


        $query =  "INSERT INTO contactTBL (customer_address, customer_phone, customer_email, customer_comment) VALUES (?, ?, ?, ?)";
        $record =  array($address, $phone, $email, $comment);


        DB::insert($query, $record);


        return "Thank You, your contact has been stored";
    }

    public function RegisterPostHandler()
    {
        return "register successfully";
    }
}
