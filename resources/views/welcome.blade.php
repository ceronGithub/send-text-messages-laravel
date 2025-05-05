@extends('layouts.app')
@section('content')

<div class="sections">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Send email via mailgun</h1>
            </div>
            <div class="card-body">
                <form action="{{route('mail-sent.data')}}" method="post">
                @csrf
                    <ul>
                        <li>Email</li>
                        <li><input type="email" class="field" placeholder="Enter email" name="email" required></li>                        
                        <br>
                        <li>Apps Password: (16 character)</li>
                        <li><input type="text" class="field" placeholder="Enter Goggle app passcord" name="appsPasscode" required></li>                        
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
                
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sections">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Send email via smtp</h1>
            </div>
            <div class="card-body">
                <form action="{{route('mail-sent.data')}}" method="post">
                @csrf
                    <ul>
                        <li>Email</li>
                        <li><input type="email" class="field" placeholder="Enter email" name="email" required></li>                        
                        <br>
                        <li>Apps Password: (16 character)</li>
                        <li><input type="text" class="field" placeholder="Enter Goggle app passcord" name="appsPasscode" required></li>                        
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
                <li><a href="https://stackoverflow.com/questions/75015524/how-to-overwrite-env-file-variables-in-laravel">this_solved_my_problem</a></li>
                <li><a href="https://laracasts.com/discuss/channels/laravel/problem-can-not-send-message-without-a-sender-address">this_solved_my_problem_too</a></li>
                    <li><a href="https://www.youtube.com/watch?v=PeK_tD4T3Og">tutorial</a></li>
                    <li><a href="https://www.youtube.com/watch?v=F1NPG3nKxrQ">Tutorial-1</a></li>
                    <li><a href="https://www.youtube.com/watch?v=lsna1S8y1vg">tutorial-stmp</a></li>
                    <li><a href="https://stackoverflow.com/questions/42727510/update-env-value-via-laravel">Article</a></li>
                    <li><a href="https://stackoverflow.com/questions/43040967/accessing-laravel-env-variables-in-blade">article_how_to_pass_data_from_blade_to_.env</a></li>
                    <li> php artisan optimize:clear : if you get null everytime you call anything from env</li>                    
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sections">
    <div class="card-group">
        <div class="card">
            <div class="card-header">
                <h1>Send message via sms</h1>
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
                    <li><a href="https://www.youtube.com/watch?v=0c7296VxnWY&t=519s">Tutorial</a></li>
                    <li>twilio website: <a href="https://www.twilio.com/en-us/messaging?cq_plac=&cq_net=g&cq_pos=&cq_med=&cq_plt=gp&utm_source=google&utm_medium=cpc&utm_term=twilio&utm_campaign=G_S_APAC_Brand_Brand_EN_PH_Exact&gad_source=1&gbraid=0AAAAADcHgwUgEj3vntGhw8cTcxtCWwrWC&gclid=Cj0KCQjwlMfABhCWARIsADGXdy__Xyfgc-88adAeSGeXUMUfaTpT7fXpUYGy-eyNTMbfLp25W4tRDSIaAlsdEALw_wcB">website_link</a></li>
                    <li hidden>uname: ceroncalsena@gmail.com</li>
                    <li hidden>pass: M@y121997</li>
                    <li><a href="https://www.youtube.com/watch?v=SonZGuM6sqQ">Tutorial</a></li>
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
                <div class="card-body">
                    <form action="form-submit" method="post">
                        @csrf
                        <ul>
                            <li><a href="https://t.me/PR_VH_Notification_bot?fbclid=IwY2xjawKBbjlleHRuA2FlbQIxMABicmlkETFUZHZWcE5DdjlUMmY0N1NTAR5hlxmIEEsPIm7Zxux8PH0obguuWyCZHuK7NtGVluDZ0UeR3z9mSJbWNLi8Nw_aem_gSpK7lPgb6FEqFg4UmxOvQ">Telegram-Channel</a></li>
                            <br>
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
                <h1>Booking schedule</h1>
            </div>
            <div class="card-body">            
                <ul>
                    <li><a href="{{ route('booking-page.page') }}">Booking page</a></li>
                </ul>        
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Commands</h1>
            </div>
            <div class="card-body">
                <ul>
                    <li><a href="https://stackoverflow.com/questions/73357843/how-to-disable-array-of-date-from-date-input-in-html">Article</a></li>                    
                </ul>
            </div>
        </div>
    </div>
</div>
