<!doctype html>
<html>
  <head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js"></script>
    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

  </head>

  <body>
    <!-- navigation bar -->
    <div class="nav-container">
      <div class="topnav">
        <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
          <div class="nav justify-content-center">
              <a class="nav-link" href="/home">Home</a>
              <div class="dropdown">
                <button class="dropbtn">Profile</button>
                <div class="dropdown-content">
                  <a href="/home/profile">View Profile</a>
                  <a href="/home/profile/change/{{$User->name}}">Change Profile Information</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Booking</button>
                <div class="dropdown-content">
                  <a href="/home/manage">Manage Booking</a>
                  <a href="/home/viewbook">View Room</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Others</button>
                <div class="dropdown-content">
                  <a href="/home/request">Make Request</a>
                  <a href="/home/check-in">Check-in</a>
                  <a href="/home/check-out">Check-out</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</button>
                <div class="dropdown-content" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div id="app" style="margin-top: 5px; margin-left: 50px; margin-right: 50px; margin-bottom: 20px; text-align: center">
          @include('flash-message')
        </div>
      </div>
    </div>

    @yield('content')

    <footer>
      Copyright 2021 HiHotel
    </footer>
  </body>
</html>
