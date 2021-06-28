<?php

namespace App\Http\Controllers;

use \App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Reservation;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:11',
            'category' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric|min:4'
        ]);
        $reservations = new Reservation();
        $reservations->name = $request->name;
        $reservations->email = $request->email;
        $reservations->phone = $request->phone;
        $reservations->category = $request->category;
        $reservations->date = $request->date;
        $reservations->time = $request->time;
        $reservations->address = $request->address;
        $reservations->city = $request->city;
        $reservations->state = $request->state;
        $reservations->zip = $request->zip;
        $reservations->status = false;
        $reservations->save();
        $events = Event ::all();
        ?>
        <script>
      alert(" Thanks for Reservation");
      </script>
      <?php
      //Mail::to($reservations['to'])->send(new SendMail());
     // Mail::to('$reservations->email')->send(new SendMail());
        return view('frontend.reservation',compact('events'));
      
        return redirect()->back();
    }

    public function index()
    {
        
        $events = Event ::all();
        return view('frontend.reservation',compact('events'));
    }
    
}
