<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;

use App\Notifications\ExampleNotification;
use App\Notifications\TelegramCrisNotification;

use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
 function () {
    return view('welcome');
})->name('home.page');

Route::post('/form-submit', function(){
    // dd(request()->all());
    Notification::route('telegram', '6696261691')->notify(new TelegramCrisNotification);
    Notification::route('telegram', '5690477490')->notify(new ExampleNotification);        
    return redirect()->back();
});

Route::get('/bookingpage', [BookingController::class, 'index'])->name('booking-page.page');
Route::post('/Booked', [BookingController::class, 'store'])->name('booking-creation.data');
