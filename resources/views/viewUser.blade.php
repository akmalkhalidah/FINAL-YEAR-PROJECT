@extends('layouts/main')
@section('content')

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">

  .box{
    background-color:#FFFFFF  ;
       width: 1200px;
       height: 1200px;
       margin: 7em auto;
       border-radius: 1.5em;
       box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
   }
  </style>
  <body>
   <div class="container box">
     <!DOCTYPE html>
   <html>
   <head>
   <style>
   table, td, th {
     border: 2px solid  #997a00;
     text-align: left;
   }

   table {
     border-collapse: collapse;
     width: 90%;
   }

   th, td {
     padding: 15px;
   }
   </style>
   </head>
   <body>

     <!DOCTYPE html>
 <html>
 <head>
 <style>
 .button {
   background-color: #4CAF50; /* Green */
   border: none;
   color: white;
   padding: 10px 5px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 15px;
   margin: 4px 2px;
   transition-duration: 0.4s;
   cursor: pointer;
 }

 .button1 {
   background-color: #F0E68C;
   border-radius: 4px;
   color: black;
   border: 2px solid #DCDCDC;
 }


.button1:hover {
  background-color: white;
  color: black;
}

 </style>
<br><center><h1>ALL USERS</h1>
  <center>  <img src="https://www.shareicon.net/data/512x512/2015/11/01/665405_users_512x512.png" alt="Avatar" style="width:100px"> </center>
 <body>

<center><form METHOD='POST' ACTION='user_cari'>
<input type='text' name='name'>
<input type='submit' name='btn' value='Search'>
{!!csrf_field() !!}
</form>
<br>
 <table border = "2" bordercolor = "black" bgcolor = "white">
   <tr>
     <th>NAME</th>
       <th>TELEPHONE NUMBER</th>
         <th>EMAIL</th>

       </tr>
@foreach ($listofuser as $u)
	<tr>
		<td> {{$u->name}} </td>
		<td> {{$u->telno}} </td>
		<td> {{$u->email}} </td>

        <td>
			<form METHOD='POST' action='user_delete'>
			<input type='hidden' name='id' value='{{ $u->id }}'>
		  <button class="button button1">Delete</button>
			{!! csrf_field() !!}
			</form>

		</td>

       <td>
		<form METHOD='POST' action='user_edit'>
			<input type='hidden' name='id' value='{{ $u->id }}'>
      <button class="button button1">Edit</button>
			{!! csrf_field() !!}
			</form>
			</td>

	</tr>
</html>
</body>
</body>
</html>
	@endforeach
@endsection
