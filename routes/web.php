<?php

use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;

$home = '/';
$about = '/about';
$contact = '/contact';
$register = "/register";
$get_started =  '/get-started';
$sendRoute = '/send-contact';
$showList = "/show-contact-list";


Route::get($home, [GetController::class, "HomeHandler"]);
Route::get($about, [GetController::class, "AboutHandler"]);
Route::get($contact, [GetController::class, "ContactHandler"]);
Route::get($register, [GetController::class, "RegisterHandler"]);
Route::get($get_started, [GetController::class, "RegisterHandler"]);
Route::get($showList, [GetController::class, "ShowListHandler"]);

Route::post($sendRoute, [PostController::class, "HandlerSendRoute"]);
Route::post($register, [PostController::class, "RegisterPostHandler"]);
