@extends('layouts.app')
@section('content')
<div class="sections">
    <h1>hello world</h1>
    <a type="button" href="{{ route('home.page')}}">Back</a>
</div>
<div class="sections">
    <div class="card-booking">
        <div class="card-booking-header">
            <h1>Booking</h1>
        </div>
        <div class="card-booking-body">
            <form action="{{ route('booking-creation.data') }}" method="post">
                @csrf
                <ul>
                    <li>Name:</li>
                    <li><input type="text" class="field" placeholder="Enter name" name="name" required></li>
                    <br>
                    <li>Start Date:</li>
                    <li><input type="date" class="field" name="start-date" min="2025-06-30" required></li>                    
                    <li>End Date:</li>
                    <li><input type="date" class="field" name="end-date" min="2025-06-30" max="2026-06-30" required></li>
                    <br>
                    <li>Package:</li>
                    <li><textarea class="txtField" name="description">benefits</textarea></li>
                    <br><br>
                    <br>
                    <br>
                    <li>Start Time:</li>
                    <li><input type="time" class="field" name="start-time" value="07:00" readonly></li>                    
                    <li>End Time:</li>
                    <li><input type="time" class="field" name="end-time" value="17:00" readonly></li>                    
                    <li>Total:</li>
                    <li><input type="number" class="field" name="total" value="22000" readonly></li>                  
                </ul> 
                <button class="subBtn" type="submit">Send</button>  
            </form>                        
        </div>
    </div>
</div>