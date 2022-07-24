@extends('layouts.navbarlayout')

@section('content')
<div class="check-container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header profile-title">
                    Check-Out
                </div>

                <div class="card-body">
                    <table>
                        <tr>
                          <th>Booking ID</th>
                          <th>Name</th>
                          <th>Room ID</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        @foreach($Booked as $book)
                        <tr>
                            <td>B00{{$book->id}}</td>
                            <td>{{$User->name}}</td>
                            <td>R{{$book->roomid}}</td>
                            <td>{{$book->start}} - {{$book->end}}</td>
                            <td>Checked-in, Ready to Check Out</td>
                            <td>
                                <a href="/home/check-out/{{$book->id}}" type="button" value="Check-Out" class="btn btn-primary checkin-btn">Check-Out</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <br />
            <div class="row flex-center">
                <a href="/home" class="btn btn-primary link-text" style="padding-left: 75px; padding-right: 75px">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection