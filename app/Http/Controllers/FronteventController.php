<?php

namespace App\Http\Controllers;
use App\Event;
use DB;
use Illuminate\Http\Request;

class FronteventController extends Controller
{
    public function index()
    {  
        $events = Event::all();
      
        return view('frontend.event.events',compact('events'));
    }

    public function show($id)
    {
        $events = Event::find($id);
        return view('frontend.event.fetch',compact('events'));
    }

   
}
