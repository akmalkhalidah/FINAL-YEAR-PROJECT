<title>Edit User</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

 .box{
  width:600px;
  margin:0 auto;
  border:10px solid #ccc;

 }

</style>
</head>
<body>
<br />

<div class="container box">

  
 <h3 align="center">Edit User Information</h3><br />
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
            <form class="" action="{{URL::to('/user_p_edituser')}}" method="post">
              <label>Enter Name</label>
              <input type='text' name='name' value='{{ $data[0]->name }}' class="form-control" />
            </div>
            <div>
            <label>Enter Email</label>
            <input type="email" name="email" value='{{ $data[0] ->email }}' class="form-control" />
          </div>
        <div>
        <label>Enter Telephone Number</label>
        <input type="telno" name="telno" value='{{ $data[0] ->telno }}' class="form-control" />
      </div>
    <br>
    <div class="form-group">
      <input type='hidden' name='id' value='{{ $data[0]->id }}'><br>
      <input type='submit' name='btn' value='Save'>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </div>
</form>

<div>
          </div>
          </div>
  </body>
</html>
