@extends('layouts.navbarlayout')

@section('content')
<div class="profile-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header profile-title">
                    Personal Profile
                </div>
                
                <div class="card-body">
                    <form method="POST" action="/home/profile/change/{{$User->name}}" enctype="multipart/form-data">
                        {{-- @method('PATCH') --}}
                        @csrf
                        <input type="hidden" name="id" value="{{ $User->id }}">
                        <div class="row profile-row">
                            <label for="name" class="col-md-6 col-label text-md-center main-text">Name :</label>
                            <div class="col-md-6 col-input">
                                <input id="name" name="name" type="text" value="{{ $User->name }}" required autofocus>
                                <br />
                                @error('name')
                                <small class="is-invalid text-left alert alert-danger bg-light p-1">
                                    {{ $message }}
                                </small>
                                @enderror<br>
                            </div>
                        </div>

                        <div class="row profile-row">
                            <label for="email" class="col-md-6 col-label text-md-center main-text">E-Mail :</label>
                            <div class="col-md-6 col-input">
                                <span>{{$User->email}}</span>
                            </div>
                        </div>
                        <br />
                        
                        <div class="row profile-row">
                            <label for="gender" class="col-md-6 col-label text-md-center main-text">Gender :</label>
                            <div class="col-md-6 col-input">
                                <select name="gender" id="gender">
                                    <option value="{{$User->gender}}" selected="selected">{{$User->gender}}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <br />
                                @error('gender')
                                <small class="is-invalid text-left alert alert-danger bg-light p-1">
                                    {{ $message }}
                                </small>
                                @enderror
                                <br>
                            </div>
                        </div>

                        <div class="row profile-row">
                            <label for="password" class="col-md-6 col-label text-md-center main-text">Password :</label>
                            <div class="col-md-6 col-input">
                                <input id="password" name="password" type="password" placeholder="Insert Password to Change" required autofocus >
                                <br />
                                @error('gender')
                                <small class="is-invalid text-left alert alert-danger bg-light p-1">
                                    {{ $message }}
                                </small>
                                @enderror<br>
                            </div>
                        </div>

                        <div class="row profile-row">
                            <label for="cpassword" class="col-md-6 col-label text-md-center main-text">Confirm Password :</label>
                            <div class="col-md-6 col-input">
                                <input id="cpassword" name="cpassword" type="password" placeholder="Repeat your password" required autofocus>
                                <br />
                                @error('cpassword')
                                <small class="is-invalid text-left alert alert-danger bg-light p-1">
                                    {{ $message }}
                                </small>
                                @enderror<br>
                            </div>
                        </div>
                        <div class="row flex-center">
                            <input type="submit" value="Submit" class="btn btn-primary" style="padding-left: 70px; padding-right: 70px"></a>
                        </div>
                        <br />
                        <div class="row flex-center">
                            <a href="/home/profile" class="btn btn-primary" style="padding-left: 75px; padding-right: 75px">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
</script>