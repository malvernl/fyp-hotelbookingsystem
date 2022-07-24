@extends('layouts.sublayout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Welcome, {{$User->name}}
            <div class="title-border"></div>
        </div>
        <div class="admin-container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header profile-title">
                            Manage Room
                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                <th>Room ID</th>
                                <th>Room Type</th>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Status</th>
                                </tr>
                                @foreach($Room as $room)
                                <tr>
                                    <td>R00{{$room->id}}</td>
                                    @if($room->roomtypeid == 1)
                                        <td>Sea View</td>
                                    @elseif($room->roomtypeid == 2)
                                        <td>Mountain View</td>
                                    @elseif($room->roomtypeid == 3)
                                        <td>King View</td>
                                    @else
                                        <td>Deluxe View</td>
                                    @endif

                                    @if($room->userid != null)
                                        <td>{{$room->userid}}</td>
                                    @else
                                        <td>-</td>
                                    @endif

                                    @if($room->name != null)
                                        <td>{{$room->name}}</td>
                                    @else
                                        <td>-</td>
                                    @endif

                                    @if($room->active == 0)
                                        <td>Not Occupied</td>
                                    @else
                                        <td>Occupied</td>
                                    @endif
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row flex-center">
                <a href="/staff" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection