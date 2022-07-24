@extends('layouts.navbarlayout')

@section('content')
<div class="dashboard-container">
    <div class="card" style="margin-bottom: 20px;">
        <div class="row-room">
            @foreach($Room as $room)
                <div class="room-column" style="color: black; font-family:'Times New Roman', Times, serif; border: 2px solid; font-size: 20px;">
                    <h2>{{ $room->roomname }}</h2>
                    @if($room->roomtype == "1")
                        <img src="/img/seaview.png" style="width: 500;height: 300px;">
                        <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                        <a href="/home/viewbook/bookroom/{{ $room->id }}" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Book</a>
                    @elseif($room->roomtype == 2)
                        <img src="/img/mountainview.png" style="width: 500;height: 300px;">
                        <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                        <a href="/home/viewbook/bookroom/{{ $room->id }}" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Book</a>
                    @elseif($room->roomtype == 3)
                        <img src="/img/queenseaview.png" style="width: 500;height: 300px;">
                        <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                        <a href="/home/viewbook/bookroom/{{$room->id}}" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Book</a>
                    @elseif($room->roomtype == 4)
                        <img src="/img/kingseaview.png" style="width: 500;height: 300px;">
                        <p>It's a {{ $room->roomdescript }} <br />The price is {{ $room->price }}</p>
                        <a href="/home/viewbook/bookroom/{{ $room->id }}" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Book</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row flex-center">
        <a href="/home" class="btn btn-primary link-text" style="padding-left: 75px; padding-right: 75px">Back</a>
    </div>
</div>
@endsection