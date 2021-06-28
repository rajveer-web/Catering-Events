@extends('frontend.front')
@section('content')
<div class="container">
    <h2 class="text content_text_one text_shadow">Events</h2>

    <div class="event">
    
    
    @foreach($events as $event)
    
    <div class="card">
                <div class="card-header">
                <img class="card-img-top" src="{{ asset('uploads/event/'.$event->image) }}" width="200" height="200" alt="Card image">
                </div>
                <div class="card-body">
                <h4 class="card-title content_text_two text_shadow " width="100" height="100">{{ $event->name }}</h4>
              
                
                <p class="card-text content_text" align="justify">{{ $event->detail }}</p>
        <a href="{{ route('frontend.event.fetch',$event->id) }}" class="btn btn-primary content_text style">Read More</a>   
                 </div>
            </div> 
            <br>
      @endforeach
    </div>
    
    </div>
   </div>

   </div> 
    <br>
  @endsection