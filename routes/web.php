<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;



Route::get('/', function () {
    return view('index');
});


Route::get("send-email",[EmailController::class,"sendEmail"]);

