<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            div.container {
                min-height: 10em;
                display: table-cell;
                vertical-align: middle
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: white;
                color: black;
                text-align: center;
            }
            #leftHalf {
                background: url({{url('images/left.jpg')}});
                background-size: 700px 800px;
                width: 50%;
                position: absolute;
                left: 0px;
                height: 100%;
            }

            #rightHalf {
                width: 50%;
                position: absolute;
                right: 0px;
                height: 100%;
            }
            p span {
                display: block;
            }

        </style>
    </head>
    <body style="background-color: #dae0e5;">
    <div id="leftHalf" class="flex-center position-ref full-height">
{{--                <button class="btn btn-primary btn-block" style="margin: 40px">SignUp</button>--}}
    </div>
    <div id="rightHalf">
    <div class="flex-center position-ref full-height" style="font-size: 45px; color: #1d643b; font-weight: bold">
            iDIGITAL <small style=" margin-top: 60px;margin-right: 110px;position:absolute;font-size: 12px"> (for client updates)</small>
            <a href="/login" class="btn btn-success"  style="margin-left: 10px">
                Click Here To SignIn
                <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>

{{--        <div class="footer">--}}
{{--            <small>Powered By Ninjathetech.com</small>--}}
{{--        </div>--}}
    </body>
</html>
