@extends('frontend.front')

@section('content')

<div class="container">

    <div class="row">
      <div class="col-xl-6 col-lg-7">
      <h1 class="text content_text_one">Review Form</h1>
      <!-- @if($errors -> any())
<div>
<ul>
@foreach($errors->all() as $err)
<li><h2>{{$err}}</h2></li>
@endforeach
</ul>
</div>
@endif -->
      <form action="{{ route('feedback.send') }}" method="post" role="form">
        @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control content_text" id="name" placeholder="Your Name"  />
              @error('name')
<span style="color:red">{{$message}}</span>
@enderror
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control content_text" name="email" id="email" placeholder="Your Email"   />
              @error('email')
<span style="color:red">{{$message}}</span>
@enderror
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control content_text" name="subject" id="subject" placeholder="Subject"  />
            @error('subject')
<span style="color:red">{{$message}}</span>
@enderror
          </div>
          <div class="form-group">
            <textarea class="form-control content_text" name="message" rows="5" placeholder="Comment"  ></textarea>
            @error('message')
<span style="color:red">{{$message}}</span>
@enderror
          </div>
         
          <div class="text-center"><button type="submit" class="btn btn-primary content_text" name="submit">Send Message</button></div>
        </form>
      </div>
      
      <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0 scroller">
        <h3 class="text content_text_one" align="center">Reviews</h3>

        
        @foreach($feedback as $num)
            <div class="card">
                <div class="card-header">
                    <h4>{{$num-> message}}</h4>
                </div>
               
                    <p class="text content_text" align="center">{{$num->name}}</p>
            </div> 
            <br>
        @endforeach
        
        
</div>

</div>
<br>
@endsection

