
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('https://data.whicdn.com/images/140416349/original.jpg');
                min-height: 100%;
                background-position: center;
                background-size: cover;
                color: #000000;
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
                color: #000000;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              <div class="title m-b-md">
              Welcome to Bus Calling
              <br>System
              </div>

              <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .button {
      background-color: #C8921F  ;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      font-size: 16px;
      margin: 4px 4px;
      display: inline-block;
      text-decoration: none;
      cursor: pointer;
    }

    .button:hover {opacity: 3}
    </style>
    </head>
    <body>

  <a href="http://localhost/BusCalling/public/user_insertnewuser" button class="button">REGISTER</a>

  <a href="http://localhost/BusCalling/public/dologin" button class="button">LOGIN</a>
    </body>
    </html>
            </div>
            </div>
          </div>
    </body>
</html>
