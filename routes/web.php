<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafe/about', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
