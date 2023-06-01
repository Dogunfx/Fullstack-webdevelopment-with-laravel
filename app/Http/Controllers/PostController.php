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

    public function RegisterNewUserHandler()
    {
        $fullname =  Request::input("customer-name");
        $email  =  Request::input('customer-email');
        $phone = Request::input('customer-phone');
        $exam_type = Request::input("customer-exam-type");

        $record = array($fullname, $email, $phone, $exam_type);

        $query = "INSERT INTO registerTBL (customer_fullname, customer_email, customer_phone, customer_exam_type) VALUES (?,?,?,?) ";
        DB::insert($query, $record);

        return redirect('register')->with('message', "Registration Successful");
    }
}
