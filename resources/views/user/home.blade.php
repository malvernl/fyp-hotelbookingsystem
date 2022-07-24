@extends('layouts.navbarlayout')

@section('content')
<div class="dashboard-container">
    <div class="content">
        <div class="user-title m-b-md">
            Welcome to the HiHotel, {{ $User->name }}
            <div class="title-border"></div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
            @endif
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="section">
                <img src="/img/request.jpg" alt="requestlogo" class="main-image"><br />
                <span class="section-text">Make Request</span><br />
                <a href="/home/request" class="btn btn-primary link-text">
                    Proceed
                </a>
            </div>
        </div>
        <div class="column">
            <div class="section">
                <img src="/img/checkin.jpg" alt="checkinlogo" class="main-image"><br />
                <span class="section-text">Check-In</span><br />
                <a href="/home/check-in" class="btn btn-primary link-text">
                    Proceed
                </a>
            </div>
        </div>
        <div class="column">
            <div class="section">
                <img src="/img/checkout.jpg" alt="checkoutlogo" class="main-image"><br />
                <span class="section-text">Check-Out</span><br />
                <a href="/home/check-out" class="btn btn-primary link-text">
                    Proceed
                </a>
            </div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 30px;">
        <div class="row-room">
            @foreach($Room as $room)
            <div class="room-column" style="color: black; font-family:'Times New Roman', Times, serif; border: 2px solid; font-size: 20px;">
                <h2>{{$room->roomname}}</h2>
                @if($room->roomtype == 1)
                    <a href="/home/viewbook/bookroom/{{ $room->id }}"><img src="/img/seaview.png" style="width: 500;height: 300px;"></a>
                    <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                @elseif($room->roomtype == 2)
                    <a href="/home/viewbook/bookroom/{{ $room->id }}"><img src="/img/mountainview.png" style="width: 500;height: 300px;"></a>
                    <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                @elseif($room->roomtype == 3)
                    <a href="/home/viewbook/bookroom/{{ $room->id }}"><img src="/img/queenseaview.png" style="width: 500;height: 300px;"></a>
                    <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                @elseif($room->roomtype == 4)
                    <a href="/home/viewbook/bookroom/{{ $room->id }}"><img src="/img/kingseaview.png" style="width: 500;height: 300px;"></a>
                    <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
