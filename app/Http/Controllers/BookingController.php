<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function index()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $createBooking = new Booking();
        $createBooking->name = $data['name'];
        $createBooking->description = $data['description'];
        $createBooking->total = $data['total'];
        $createBooking->startTime = $data['start-time'];
        $createBooking->endTime = $data['end-time'];
        $createBooking->startDate = $data['start-date'];
        $createBooking->endDate = $data['end-date'];
        $createBooking->save();     
        return redirect()->back();
    }
}
