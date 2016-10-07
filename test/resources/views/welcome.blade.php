<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Epitrain</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                display: block;
                margin-left: auto;
                margin-right: auto
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .picture{
                height: 210px;
                width: 260px;
                display: block;
                margin-left: auto;
                margin-right: auto
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        <table>
            <tr>

                            <td>
                                <div>
                                    <img src="http://static1.squarespace.com/static/5350fdbfe4b0ae193f88025d/t/5625ee2de4b0be0be0983ce8/1473397256723/?format=1000w" class="flex-center picture">
                                </div>
                            </td>

            </tr>

            <!--<tr>

                            <td>
                                <div class="content">
                                    <div class="title m-b-md">
                                        Epitrain
                                    </div>
                                </div>
                            </td>

            </tr>-->
        </div>
    </body>
</html>
