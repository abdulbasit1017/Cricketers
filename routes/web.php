<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/about',[HomeController::class,'about'] );
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/',[HomeController::class,'index']);
Route::post('/form',[HomeController::class,'form']);
