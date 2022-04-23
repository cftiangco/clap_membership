<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;

Route::get('/',[RegistrationController::class,'index']);

Route::get('/application',[RegistrationController::class,'index']);
Route::post('/application',[RegistrationController::class,'store']);


Route::get('/dashboard',[DashboardController::class,'index']);