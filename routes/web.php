<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AccountController;

Route::get('/',[MemberController::class,'home']);
Route::get('/login',[MemberController::class,'login']);

Route::get('/application',[RegistrationController::class,'index']);
Route::post('/application',[RegistrationController::class,'store']);


Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/dashboard/members/all',[MemberController::class,'index']);
Route::get('/dashboard/members/active',[MemberController::class,'active']);
Route::get('/dashboard/members/forapproval',[MemberController::class,'forapproval']);

Route::get('/dashboard/payment/request',[PaymentController::class,'index']);
Route::get('/dashboard/payment/history',[PaymentController::class,'history']);

Route::get('/dashboard/users/accounts',[AccountController::class,'index']);
Route::get('/dashboard/users/accounts/new',[AccountController::class,'new']);
Route::get('/dashboard/login',[AccountController::class,'login']);