@extends('frontend.front')

@section('content')

   
<div class="container">

<h1 class="text content_text_one text_shadow">Reservation Form</h1>
<!-- @if($errors -> any())
<div>
<ul>
@foreach($errors->all() as $err)
<li><h2>{{$err}}</h2></li>
@endforeach
</ul>
</div>
@endif -->
<br>
<div class="style container"><br>
<form class="container" method="post" action="{{ route('reservation.reserve') }}">
                            @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4" class="content_text">Full Name</label>
            <input type="text" name="name" class="form-control content_text"  placeholder="Full name" required data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" >
            @error('name')
<span style="color:red">{{$message}}</span>
@enderror
          </div>
        <div class="form-group col-md-4">
        <label for="inputEmail4" class="content_text">Email</label>
        <input type="email" name="email" class="form-control content_text" id="inputEmail4" placeholder="Email"  >
        @error('email')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
      <div class="form-group col-md-4">
        <label for="inputEmail4" class="content_text">Phone</label>
        <input type="text"  name ="phone" class="form-control content_text"  placeholder="Phone" >
        @error('phone')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
        <label class="mr-sm-2 content_text" for="inlineFormCustomSelect" >Catagory</label>
        <select class="custom-select mr-sm-2 content_text" id="inlineFormCustomSelect" name="category">
          <option selected>Choose...</option>
          @foreach($events as  $event)
          <option value="{{ $event->name }}">{{ $event->name }}</option>  
          @endforeach
        </select>
       
      </div>
      <div class="form-group col-md-4">
        <label for="date" class="content_text">Date</label>
        
        <input type="date" class="form-control content_text" id="date" name="date" placeholder="Date"  />               
        @error('date')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
      
      <div class="form-group col-md-4">
        <label for="time" class="content_text">Time</label>
        <input class="form-control content_text" type="time" name="time"  /> 
        @error('time')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress" class="content_text">Address</label>
      <input type="text" class="form-control content_text" name="address" id="inputAddress" placeholder="1234 Main St" >
      @error('address')
<span style="color:red">{{$message}}</span>
@enderror
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity" class="content_text">City</label>
        <input type="text" name="city" class="form-control content_text" id="inputCity">
        @error('city')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
      <div class="form-group col-md-4">
        <label for="inputState" class="content_text">State</label>
        <input type="text" name="state" class="form-control content_text" id="inputCity">
        @error('state')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip" class="content_text">Zip</label>
        <input type="text" name="zip" class="form-control content_text" id="inputZip">
        @error('zip')
<span style="color:red">{{$message}}</span>
@enderror
      </div>
    </div>
    <button type="submit" id="submit" name="submit" class="btn btn-primary content_text"> Make a reservation</button><br>
  </form> <div>
</div>  </div>
<!-- $(function(){
   $('#registerform').parsley()
}) -->
 <br><br>
  
  @endsection

 