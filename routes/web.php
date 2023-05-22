<?php


$home = '/';
$about = '/about';
$contact = '/contact';
$register = "/register";
$get_started =  'get-started';
$sendRoute = '/send-contact';
$showList = "/show-contact-list";



$homeHandler = function () {
    return view('home');
};

$aboutHandler = function () {
    return view('about');
};

$contactHandler = function () {
    return view('contact');
};



Route::get($home, $homeHandler);
Route::get($about, $aboutHandler);
Route::get($contact, $contactHandler);

Route::get($register, function () {
    return view('register');
});
$registerPostHandler = function () {
    return "register successfully";
};
Route::get('/get-started', function () {
    return view('register');
});


$MY_DB = array();

$handlerSendRoute = function () use ($MY_DB) {
    $address =  Request::input("address");
    $phone =  Request::input("phone");
    $email =  Request::input("email");
    $comment =  Request::input("comment");
    $record =  array($address, $phone, $email, $comment);

    $MY_DB = array($record);
    return  $MY_DB;
    // return "Thank You, your contact has been stored";
};



$showListHandler = function () use ($MY_DB) {

    return $MY_DB;
};



Route::post($sendRoute, $handlerSendRoute);
Route::post($register, $registerPostHandler);
Route::get($showList, $showListHandler);
