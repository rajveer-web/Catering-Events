@extends('frontend.front')
@section('title','Read More')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7">
      <h1 class="text content_text_one text_shadow">{{ $events->name }} ${{ $events->price }}</h1>
        <p  class="content_text_three text_align">{{ $events->detail }}</p>
        <p  class="content_text_three text_align"> {{ $events->description }}</p>
      </div>
      <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">  
        <img class="card-img-top style" src="{{ asset('uploads/event/'.$events->image) }}" width="450" height="450">
        </div>
        <br>
        <a href="{{ route('frontend.event.events') }}" class="btn btn-primary style">Back</a>
  </div>
<br>
  @endsection