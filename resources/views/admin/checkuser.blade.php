@extends('layouts.sublayout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Welcome, {{$Admin->name}}
            <div class="title-border"></div>
        </div>
        <div class="admin-container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header profile-title">
                            Check Staff/User
                        </div>

                        <div class="card-body">
                            <table>
                                <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Action</th>
                                </tr>
                                @foreach($User as $user)
                                <tr>
                                    <td>{{ $user->id }} </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>
                                        <a href="/admin/check-user/{{$user->id}}" type="button" value="Remove User" class="btn btn-primary">Remove Users</a>
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
                <a href="/admin" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection