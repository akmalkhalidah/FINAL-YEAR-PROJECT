
<title>Register Page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.box{
  background-color:#FFFFFF  ;
     width: 400px;
     height: 500px;
     margin: 7em auto;
     border-radius: 1.5em;
     box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
 }

body {
   background-image: url('https://webgradients.com/public/webgradients_png/004%20Juicy%20Peach.png');

}

</style>
</head>
<body>
<br />

<div class="container box">
 <h3 align="center">Register Page</h3><br />
 <center>  <img src="https://www.rapidnovor.com/wp-content/uploads/2019/10/signup-icon-13.png" alt="Avatar" style="width:100px"> </center>
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
            <form class="" action="{{URL::to('/user_p_insertuser')}}" method="post">
              <label>Enter Name</label>
              <input type="name" name="name" class="form-control" />
            </div>
            <div>
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
          </div>
          <label>Enter Password</label>
          <input type="password" name="password" class="form-control" />
        </div>
        <div>
        <label>Enter Telephone Number</label>
        <input type="telno" name="telno" class="form-control" />
      </div>
    <br>
    <div class="form-group">
   <input type="submit" name="login" class="btn btn-primary" value="Register" />
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>
</form>

<div>
          </div>
          </div>
  </body>
</html>
