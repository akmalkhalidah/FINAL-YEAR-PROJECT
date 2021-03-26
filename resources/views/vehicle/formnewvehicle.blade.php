@extends('layouts/main');
@section('content')

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
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
     <!DOCTYPE html>
   <html>
   <style>
     * {
       box-sizing: border-box;
     }

     form {
       padding: 1em;
       background: #f9f9f9;
       border: 1px solid #F0E68C;
       margin-top: 2rem;
       max-width: 700px;
       margin-left: auto;
       margin-right: auto;
       padding: 1em;
     }
     form input {
       margin-bottom: 1rem;
       background: #fff;
       border: 1px solid #9c9c9c;
     }
     form button {
       background: #F0E68C;
       padding: 0.7em;
       border: 0;
     }
     form button:hover {
       background: gold;
     }

     label {
       text-align: right;
       display: block;
       padding: 0.5em 1.5em 0.5em 0;
     }

     input {
       width: 100%;
       padding: 0.7em;
       margin-bottom: 0.5rem;
     }
     input:focus {
       outline: 3px solid gold;
     }

     @media (min-width: 400px) {
       form {
         overflow: hidden;
       }

       label {
         float: left;
         width: 200px;
       }

       input {
         float: left;
         width: calc(100% - 200px);
       }

       button {
         float: center;
         width: 10px;
       }
     }
     </style>


     <body>

<body>
 <div class="container box">
	<br><h1 align="center">MANAGE VEHICLE</h1><br />
    <center>  <img src="https://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Bus-icon.png" alt="Avatar" style="width:100px"> </center>
	 <body>

		 <div class="content">
	 		<form class="" action="{{URL::to('/vehicle_p_insertvehicle')}}" method="post">
<div>
      	<label>Id Vehicle</label>
	 			<input type="text" name="id_vehicle" class="form-control" />
	 		</div>

      <div>
        <label>Plate Number</label>
	 		<input type="text" name="plate_no" class="form-control" />
	 	</div>

    <div>
<label>Vehicle Type</label>
	 	<input type="text" name="vehicle_type" class="form-control" />
	 </div>

   <div>
	 <label>Number of Passenger</label>
	 <input type="text" name="no_pax" class="form-control" />
	 </div>

	 <br>
	 <div class="form-group">
	 <input type="submit" name="login" class="btn btn-primary" value="SAVE" />
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 </div>
 </form>
<br>

@endsection
