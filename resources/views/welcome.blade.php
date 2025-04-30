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
                            <li><input type="text" class="field" placeholder="Enter name" name="name" required></li>
                            <br>
                            <li>Start Date:</li>
                            <li><input type="date" class="field" name="start-date" required></li>
                            <br>
                            <li>End Date:</li>
                            <li><input type="date" class="field" name="end-date" required></li>
                            <br>
                            <li>Text Message:</li>
                            <li><textarea class="txtField" value="This from laravel, we glad to inform you that someone has book on date:... package:... with total price:... thank you and have a nice!" name="message">This from laravel, we glad to inform you that someone has book on date:... package:... with total price:... thank you and have a nice!</textarea></li>                                                    
                        </ul> 
                        <button class="subBtn" type="submit">Send</button>  
                    </form>                        
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Commands</h1>
                </div>
                <div class="card-body-commands">
                    <ul>                 
                        <li>composer require laravel-notification-channels/telegram</li> 
                        <li>Youtube channel : <a href="https://www.youtube.com/watch?v=OOBAgaEwod4">Tutorial</a></li>
                        <li>Youtube creating bot: <a href="https://www.youtube.com/watch?v=7a8UWhJWurs">Tutorial</a></li>
                        <li>Telegram responded with an error 400 - Bad Request: chat not found</li>
                        <li>solution: open telegram, open the created bot channel, start it, make a simple convo. then resend the trait_exists</li>                    
                        <li>articles :</li>
                        <li><a href="8072464812:AAF3gHN-clCLXPb7KafkuzJsnWvj2JLYTuQ">Click_article</a></li>
                        <li><a href="https://core.telegram.org/bots/api#sendmessage">Article</a></li>
                        <li><a href="https://laravel-notification-channels.com/telegram/#usage">Article</a></li>
                        <li><a href="https://laravel-notification-channels.com/telegram/#available-methods">Article</a></li>
                        <li><a href="https://laracasts.com/discuss/channels/laravel/laravel-and-telegram-bot">Article</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sections">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Create text message</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <ul>
                        <li>Pick Date:</li>
                        <li><input type="date" class="field" placeholder="Enter number"></li>
                        <br>
                        <li>Text Message:</li>
                        <li><textarea class="txtField" placeholder="what is your message?"></textarea></li>                                                    
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
                    <li>composer require twilio/skd</li>
                    <li>display : <a href="https://www.w3schools.com/cssref/playdemo.php?filename=playcss_display&preval=inline">tutorial</a></li>
                    <li>check the .env</li>
                </ul>
            </div>
        </div>
    </div>
</div>