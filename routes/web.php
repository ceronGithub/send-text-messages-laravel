<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;

use App\Notifications\ExampleNotification;
use App\Notifications\TelegramCrisNotification;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MailingController;
use App\Mail\TrialMail;
use App\Notifications\clientNotification;
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
    $envFile = base_path('.env');
    $envContent = file($envFile);   
    // dd(request());    
    foreach ($envContent as $key => $line){   
        $envContent[52] = "\r\n";                  
        $envContent[53] = "TELEGRAM_BOT_TOKEN=".'"'.request()->channel.'"'. "\r\n";
    }
    file_put_contents($envFile, implode('', $envContent));
    Notification::route('telegram', request()->teleGramId)->notify(new clientNotification);
    Notification::route('telegram', '6696261691')->notify(new TelegramCrisNotification);
    Notification::route('telegram', '5690477490')->notify(new ExampleNotification);        
    return redirect()->back();
});

Route::get('/bookingpage', [BookingController::class, 'index'])->name('booking-page.page');
Route::post('/Booked', [BookingController::class, 'store'])->name('booking-creation.data');

Route::post('/mail-sent', [MailingController::class, 'storeSMTP'])->name('mail-sent.data');