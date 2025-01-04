<?php

use Illuminate\Support\Facades\Route;

// font 
use App\Http\Controllers\Landing\LandingController;

// member ( dashboard )
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('/', LandingController::class);

