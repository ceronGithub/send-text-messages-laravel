<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;

use App\Notifications\ExampleNotification;

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
});

Route::post('/form-submit', function(){
    // dd(request()->all());
    Notification::route('telegram', '5690477490')->notify(new ExampleNotification);
    // Notification::route('telegram', '6696261691')->notify(new ExampleNotification);    
    return view('welcome');
});
