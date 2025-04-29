@extends('layouts.app')
@section('content')
<div class="sections">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Create text message</h1>
            </div>
            <div class="card-body">
                <ul>
                    <li>Phone number:</li>
                    <li><input type="text" class="field" placeholder="Enter number"></li>
                    <br>
                    <li>Text Message:</li>
                    <li><textarea class="txtField" placeholder="what is your message?"></textarea></li>                                                    
                </ul> 
                <button class="subBtn" type="submit">Send</button>                          
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Commands</h1>
            </div>
            <div class="card-body">
                <ul>
                    <li>composer require twilio/skd</li>
                    <li>display : <a href="https://www.w3schools.com/cssref/playdemo.php?filename=playcss_display&preval=inline">tutorial</a></li>
                    <li>check the .env</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sections">
<div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Create text message send to telegram</h1>
            </div>
            <div class="card-body" style="">
                <form action="form-submit" method="post">
                    @csrf
                    <ul>
                        <li>Name:</li>
                        <li><input type="text" class="field" placeholder="Enter name" name="name"></li>
                        <br>
                        <li>Email:</li>
                        <li><input type="email" class="field" placeholder="Enter email" name="email"></li>
                        <br>
                        <li>Text Message:</li>
                        <li><textarea class="txtField" value="booking on date:... time:... this is to notify the owners :)" name="message">booking on date:... time:... this is to notify the owners :)</textarea></li>                                                    
                    </ul> 
                    <button class="subBtn" type="submit">Send</button>  
                </form>                        
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Commands</h1>
            </div>
            <div class="card-body">
                <ul>                 
                    <li>composer require laravel-notification-channels/telegram</li>   
                    <li>display : <a href="https://www.youtube.com/watch?v=OOBAgaEwod4">tutorial</a></li>
                    <li>Telegram responded with an error 400 - Bad Request: chat not found</li>
                    <li>solution: open telegram, open the created bot channel, start it, make a simple convo. then resend the trait_exists</li>
                    <li>articles :</li>
                    <li><a href="8072464812:AAF3gHN-clCLXPb7KafkuzJsnWvj2JLYTuQ">Click_article</a></li>
                    <li><a href="https://core.telegram.org/bots/api#sendmessage">Article</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>