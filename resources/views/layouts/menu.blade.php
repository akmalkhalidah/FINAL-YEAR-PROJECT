@if (session('level')==1)

<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 150%;
}
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 85px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a href="user">LIST OF BUS DRIVER</a></li>
  <li><a href="newschedule">MANAGE SCHEDULE</a></li>
  <li><a href="vehicle">MANAGE VEHICLE</a></li>
  <li><a href="logout">LOGOUT</a></li>
</ul>

</body>
</html>


@else
<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 130px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a href="user">LIST OF BUS DRIVER</a></li>
  <li><a href="schedule">VIEW SCHEDULE</a></li>
  <li><a href="logout">LOGOUT</a></li>
</ul>

</body>
</html>
@endif
