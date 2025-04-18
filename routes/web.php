<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
return view('welcome');
});
Route::get('/test', function () {
return view('test');
});

Route::view('/dashboard' , [DashboardController::class , 'dashboard']);
