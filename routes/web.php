<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'admin']);
Route::get('user',[UserController::class,'user']);