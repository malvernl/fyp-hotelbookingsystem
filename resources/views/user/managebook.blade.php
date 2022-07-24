@extends('layouts.navbarlayout')

@section('content')
<div class="check-container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header profile-title">
                    Manage Booking
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>Room ID</th>
                        <th>Date</th>
                        <th>Action</th>
                        </tr>
                        @foreach($Booked as $book)
                        <tr>
                            <td>B00{{$book->id}}</td>
                            <td>{{$User->name}}</td>
                            <td>R{{$book->roomid}}</td>
                            <td>{{$book->start}} - {{$book->end}}</td>
                            <td>
                                <a href="/home/manage/{{ $book->id }}" type="button" value="Cancel Booking" class="btn btn-primary">Cancel Booking</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row flex-center">
        <a href="/home" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Back</a>
    </div>
</div>
@endsection