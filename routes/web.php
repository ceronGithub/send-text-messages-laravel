<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;

use App\Notifications\ExampleNotification;
use App\Notifications\TelegramCrisNotification;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MailingController;
use App\Mail\TrialMail;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {    
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

// Route::post('/mail-sent', function () {
//     // dd(request(['email']));  
//     // Config::set('app.mail.username' , request()->email);
//     // Config::set('app.mail.password', request()->appsPasscode);    
//     // Config::set('app.usernameMailing', request()->email);
//     // Config::set('app.passwordMailing', request()->appsPasscode);
//     // putenv("MAIL_USERNAME=request()->email");
//     // putenv("MAIL_PASSWORD=request()->appsPasscode");    
        
//     Mail::to(request()->email)->send(new TrialMail(request()->all()));    
//     return redirect()->back();
// })->name('mail-sent.data');

Route::post('/mail-sent', [MailingController::class, 'store'])->name('mail-sent.data');