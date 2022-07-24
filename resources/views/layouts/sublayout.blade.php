<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: crimson;
                font-family:'Times New Roman', Times, serif;
                text-transform: uppercase;
                padding: 12px 0;
            }

            .title .title-border {
                border-bottom: 40px solid;
                background-image: linear-gradient(maroon 0% ,crimson 100%);
            }

            .profile-title {
                color: white;
                background-color: rgba(206, 56, 29, 0.842);
                text-align: center;
                font-family:'Times New Roman', Times, serif;
                font-size: 25px
            }

            .admin-container {
                padding: 30px;
            }

            .admin-container .section {
                margin-top: 50px;
                border-style: groove;
                border-color: grey;
            }

            .admin-container .section .section-text {
                font-size: 50px;
                color: firebrick;
                font-family:'Times New Roman', Times, serif;
                border-bottom: 2px solid;
                padding: 12px 0;
            }

            .link-text {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .admin-container table {
                font-family: 'Times New Roman', Times, serif;
                color: black;
                border-collapse: collapse;
                width: 100%;
            }

            .admin-container td, .admin-container th {
                border: 2px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:first-child {
                background-color: rgba(206, 56, 29, 0.842);
                color: white;
            }

            footer {
                background: #eee;
                padding: 15px;
                text-align: center;
                font-size: 20px;
                font-family:'Times New Roman', Times, serif;
                bottom: 0;
                position: absolute;
                width: 100%;
            }
        </style>
    </head>
    <body>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="app" style="margin-top: 5px; margin-left: 50px; margin-right: 50px; margin-bottom: 20px; text-align: center">
                @include('flash-message')
                </div>
            </div>
        </div>
    
        @yield('content')

        <footer>
            Copyright 2021 HiHotel
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
