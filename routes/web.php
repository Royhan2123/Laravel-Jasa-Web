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


Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('explore', [LandingController::class, 'explore'])->name(name: 'explore.landing');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('detail.landing');
Route::get('detail_booking/{id}', [LandingController::class, 'detail_booking'])->name('detail_booking.landing');
Route::get('booking/{id}', [LandingController::class, 'booking'])->name('booking.landing');


Route::group(['prefix' => 'member', 'middleware' => ['auth:sanctum', 'verified']], 
function () {
    
    // dashboard
    Route::resource('dashboard', MemberController::class);

    // services
    Route::resource('service', ServiceController::class);

    // request
    Route::get('approve_request/{id}', [RequestController::class, 'approve'])->name('approve.request');
    Route::resource('request', RequestController::class);

    // my order
    Route::get('accept/order/{id}', [MyOrderController::class, 'accepted'])->name('accept.request');
    Route::get('reject/order/{id}', [MyOrderController::class, 'rejected'])->name('reject.request');
    Route::resource('order', MyOrderController::class);   

    // profile
    Route::get('delete_photo', [ProfileController::class, 'delete'])->name('delete.photo.profile');
    Route::resource('profile', ProfileController::class);

});