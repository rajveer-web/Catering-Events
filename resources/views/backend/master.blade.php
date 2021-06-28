<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">
<link href="{{ asset('backend/css/demo.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('backend/css/style2.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>

</style>

</head>
<body>
<div class="topnav">
<div class="navbar  float-right">

  <li class="nav-item dropdown">
        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         {{ Auth::user()->name }}  
         </a>
  
    
      <a class="dropdown" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
               </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
    </form>
    </div>
  </div> 
</div>
</div>
<div class="sidenav">
<h2 style="color: white">Vintage Daisy</h2>
<h3 style="color: white">Dashboard</h3><br><br>
  <a href="{{route('home') }}"><i class="material-icons">dashboard</i>Dashboard</li></a>
  <a href="{{route('reservation.index') }}"><i class="material-icons">chrome_reader_mode</i>Reservation</a>
  <a href="{{route('category.index') }}"> <i class="material-icons">content_paste</i>Category</a>
  <a href="{{route('item.index') }}"><i class="material-icons">library_books</i>Menu</a>
  <a href="{{route('event.index') }}"><i class="material-icons">content_paste</i>Events</a> 
  <a href="{{route('feedback.index') }}"> <i class="material-icons">message</i>Feedback</a>
  <a href="{{route('contact.index') }}"> <i class="material-icons">message</i>Contact</a>
  
</div>

<div class="main">
 @yield('content')
</div>

<footer class="footer">
  <p>Design by group Rajveer kaur, Jenish Khunt
  
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


    <script>
       $(document).ready(function() {
    $('#example').DataTable();
} );

    </script> 
</body>
</html> 








