<?php

use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GetController::class, "HomeHandler"]);
Route::get("/about", [GetController::class, "AboutHandler"]);
Route::get("/contact", [GetController::class, "ContactHandler"]);
Route::get("/register", [GetController::class, "RegisterHandler"]);
Route::get("/get-started", [GetController::class, "RegisterHandler"]);
Route::get("/show-contact-list", [GetController::class, "ShowListHandler"]);

Route::post("/send-contact", [PostController::class, "SendContactPostHandler"]);
Route::post("/register", [PostController::class, "RegisterPostHandler"]);
Route::post('/register-new-user', [PostController::class, "RegisterNewUserHandler"]);

Route::get('/encrypt', [GetController::class, 'EncryptPasswordHandler']);
Route::get('/login', [GetController::class, 'Login']);

Route::post('/auth-admin', [PostController::class, 'AuthAdmin']);


