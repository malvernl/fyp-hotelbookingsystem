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
                            Manage Request
                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                <th>Request ID</th>
                                <th>Request Name</th>
                                <th>Request Description</th>
                                <th>Status</th>
                                <th>Booking ID</th>
                                <th>Action</th>
                                </tr>
                                @foreach($Ureq as $req)
                                <tr>
                                    <td>R00{{$req->id}}</td>
                                    <td>{{$req->requestitem}}</td>
                                    <td>{{$req->requestdesc}}</td>
                                    <td>Ready to be approved</td>
                                    <td>{{$req->bookingid}}</td>
                                    <td>
                                        <a href="/staff/managerequest/{{$req->id}}" type="button" value="Accept" class="btn btn-primary">Accept</a>
                                        <a href="/staff/managerequest/{{$req->id}}/refuse" type="button" value="Refuse" class="btn btn-primary">Refuse</a>
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
                <a href="/staff" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection