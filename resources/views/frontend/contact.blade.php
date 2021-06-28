
@extends('frontend.front')

@section('content')

<div class="container">

    <div class="section-title">
        <h1 class="text content_text_one text_shadow">Contact Us</h1>
     
    </div>

    <div class="row no-gutters justify-content-center">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="text content_text_two">
          <div class="address">
            <i class="icofont-google-map text_shadow">
            Location:</i>
            <p class="text_color">70 Verran Road, Birkdale, Auckland, Auckland Region 0626, New Zealand</p>
          </div>

          <div class="text content_text_two">
            <i class="icofont-envelope text_shadow">
            Email:</i>
            <p class="text_color">daisyhtea@gmail.com</p>
          </div>

          <div class="text content_text_two">
            <i class="icofont-phone text_shadow">
            Call:</i>
            <p class="text_color">022 064 6819</p>
          </div>

        </div>
 
      </div>

      <div class="col-lg-5 d-flex align-items-stretch">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.55177961841!2d174.70811771524785!3d-36.805295679947584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d38c2a5c4f6e3%3A0x7569ff1e4ae4d2bc!2s70%20Verran%20Road%2C%20Birkdale%2C%20Auckland%200626!5e0!3m2!1sen!2snz!4v1599908954189!5m2!1sen!2snz" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

    </div><br>
    <div class="style container">
    <div class="row mt-5 justify-content-center">
    <!-- @if($errors -> any())
<div>
<ul>
@foreach($errors->all() as $err)
<li><h2>{{$err}}</h2></li>
@endforeach
</ul>
</div>
@endif -->
      <div class="col-lg-10">
        <form action="{{ route('contact.send') }}" method="post" role="form">
        @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control content_text" id="name" placeholder="Your Name" />
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
            <textarea class="form-control content_text" name="message" rows="5"  ></textarea>
            @error('message')
<span style="color:red">{{$message}}</span>
@enderror
          </div>
         
          <div class="text-center"><button type="submit" class="btn btn-primary content_text" name="submit">Send Message</button></div>
        </form>
      </div>
    </div>
        </div></div>
  </div><br>

  @endsection

 