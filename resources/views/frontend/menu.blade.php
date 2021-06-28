@extends('frontend.front')
@section('content')
<div class="container">
<h1 class="text content_text_one text_shadow">Menu List</h1>
@foreach($items as $item)
<button class="accordion">{{ $item->category->name }} </button>

<div class="panel style">
  <p id="{{ $item->category->slug }}"></p>
    <p class="content_text_two"><b class="text_shadow"> {{ $item->name }}</b></p>
  <p class="content_text">{{ $item->description }}</p>
  <p class="content_text_two"><b class="text_shadow">${{ $item->price }}</b></p>
</div>

@endforeach
</div>
<br>
<script>
    var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endsection