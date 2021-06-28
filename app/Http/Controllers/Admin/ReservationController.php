<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('backend.reservation.index',compact('reservations'));
    }
    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        //Notification::route('mail',$reservation->email ) 
        //->notify(new ReservationConfirmed());
        return redirect()->back()->with('successMsg','Message Successfully Confirm');
        return redirect()->back();
    }
    public function destory($id){
        Reservation::find($id)->delete();
        return redirect()->back()->with('successMsg','Message Successfully Delete');
        return redirect()->back();
    }
}
