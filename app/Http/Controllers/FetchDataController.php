<?php

namespace App\Http\Controllers;
use App\Event;
use DB;
use Illuminate\Http\Request;

class FetchDataController extends Controller
{
    public function getdata()
    {   
        $events = DB::select('select * from events where id<=3');
        return view('frontend.home',compact('events'));
    }

}
