@extends('layouts.navbarlayout')

@section('content')
<div class="profile-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header profile-title">
                    Personal Profile
                </div>
                <br />
                <div class="row profile-row">
                    <label for="name" class="col-md-6 col-label text-md-center main-text">Name :</label>
                    <div class="col-md-6 col-input">
                        <span id="name" name="name" type="text">{{ $User->name }}</span>
                    </div>
                </div>
                <div class="row profile-row">
                    <label for="email" class="col-md-6 col-label text-md-center main-text">E-Mail :</label>
                    <div class="col-md-6 col-input">
                        <span id="email" name="email" type="email">{{ $User->email }}</span>
                    </div>
                </div>
                <div class="row profile-row">
                    <label for="gender" class="col-md-6 col-label text-md-center main-text">Gender :</label>
                    @empty ( $User->gender )
                        <div class="col-md-6 col-input">
                            <span id="gender" name="gender" type="text">-</span>
                        </div>
                    @endempty
                    @isset( $User->gender )
                        <div class="col-md-6 col-input">
                            <span id="gender" name="gender" type="text"> {{ $User->gender }}</span>
                        </div>
                    @endisset
                </div>
                <div class="row flex-center">
                    <a href="/home/profile/change/{{ $User->name }}" class="btn btn-primary link-text">Change Information</a>
                </div>
                <br />
                <div class="row flex-center">
                    <a href="/home" class="btn btn-primary link-text" style="padding-left: 75px; padding-right: 75px">Back</a>
                </div>
                <br />
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection