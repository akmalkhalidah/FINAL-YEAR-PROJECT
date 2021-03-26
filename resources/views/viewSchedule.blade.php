@extends('layouts/main')
@section('content')

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
  .box{
    background-color:#FFFFFF  ;
       width: 900px;
       height: 700px;
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

<br><center><h1>VIEW SCHEDULE</h1>
    <center>  <img src="https://www.vippng.com/png/detail/211-2117863_1-6-meet-schedule-mark-your-calendar-icon.png" alt="Avatar" style="width:100px"> </center>
<table border = "1" bordercolor = "black" bgcolor = "white">
  <tr>
    <th>Date</th>
      <th>Day</th>
        <th>Time</th>
        <th>On Duty</th>
        <th>Type Vehicle</th>
        <th>Number of Passenger</th>
      </tr>

@foreach ($listofschedule as $u)


	<tr>
		<td> {{$u->date}} </td>
		<td> {{$u->day}} </td>
		<td> {{$u->time}} </td>
    <td> {{$u->on_duty}} </td>
    <td> {{$u->type_vehicle}} </td>
    <td> {{$u->no_pax}} </td>

	</tr>

  </html>
</body>
	@endforeach
@endsection
