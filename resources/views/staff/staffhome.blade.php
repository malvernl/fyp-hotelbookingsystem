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
                <div class="col-md-8">
                    <div class="form-group row mt-2">
                        <div class="col-md-6 main-button-space">
                            <div class="section">
                                <span class="section-text">Manage Room</span><br />
                                <a href="/staff/manageroom" class="btn btn-primary link-text">
                                    Manage Room
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 main-button-space">
                            <div class="section">
                                <span class="section-text">Manage Request</span><br />
                                <a href="/staff/managerequest" class="btn btn-primary link-text">
                                    Manage Request
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 main-button-space">
                    <div class="section">
                        <span class="section-text">Log Out</span><br />
                        <a class="btn btn-primary link-text" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection