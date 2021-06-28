@extends('frontend.front')

@section('title')
     Home
 @endsection


 
   @section('content')
   <div class="container">
    <h1 class="text content_text_one text_shadow"> Welcome </h1>
    <p class="content_text" align="justify">We provide a variety of tasty catering and group sharing options for business meetings, functions and events. Delivering happiness for four - 500+ people. We cater to all dietary preferences including vegan, vegetarian, gluten free and dairy free.
    Order in-store, online or on our app. We require 2 hours notice on all catering orders, however please phone your local store to check they can accommodate your needs. Free delivery for orders over $100 at participating stores within set delivery zones. View our menu below or visit our online ordering page by clicking the link below.</p>
    </div>
    <br>
    <div class="container">
      <h2 class="text content_text_one">Events</h2>
      <div class="event">
      @foreach($events as $event)
    
    <div class="card">
                <div class="card-header">
                <img class="card-img-top" src="{{ asset('uploads/event/'.$event->image) }}" width="200" height="200" alt="Card image">
                </div>
                <div class="card-body">
                <h4 class="card-title content_text_two text_shadow" width="100" height="100">{{ $event->name }}</h4>
              
                
                <p class="card-text content_text" align="justify">{{ $event->detail }}</p>
  
                 </div>
            </div> 
            <br>
      @endforeach
    </div>
      </div>
      </div>

   @endsection
  

   @section('script')
    
   @endsection
