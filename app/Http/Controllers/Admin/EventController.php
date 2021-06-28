<?php

namespace App\Http\Controllers\Admin;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request,[
                'name' => 'required',
                'detail' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'required|mimes:jpeg,jpg,bmp,png',
            ]);
            $image = $request->file('image');
            $slug = $request->name;
            if (isset($image))
            {
                $currentDate = Carbon::now()->toDateString();
                $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
    
                if (!file_exists('uploads/event'))
                {
                    mkdir('uploads/event',0777,true);
                }
                $image->move('uploads/event',$imagename);
            }else{
                $imagename = "default.png";
            }
            $event = new Event();
            $event->name = $request->name;
            $event->detail = $request->detail;
            $event->description = $request->description;
            $event->price = $request->price;
            $event->image = $imagename;
            $event->save();
            return redirect()->route('event.index')->with('successMsg','event Successfully Saved');
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'detail' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $event = Event::find($id);
        $image = $request->file('image');
        $slug = $request->name;
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/event'))
            {
                mkdir('uploads/event',0777,true);
            }
            unlink('uploads/event/'.$event->image);
            $image->move('uploads/event',$imagename);
        }else{
            $imagename = $event->image;
        }

        
        $event->name = $request->name;
        $event->detail = $request->detail;
        $event->description = $request->description;
        $event->price = $request->price;
        $event->image = $imagename;
        $event->save();
        return redirect()->route('event.index')->with('successMsg','Event Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if (file_exists('uploads/event/'.$event->image))
        {
            unlink('uploads/event/'.$event->image);
        }
        $event->delete();
        return redirect()->back()->with('successMsg','Event successfully Deleted');
    }
}

