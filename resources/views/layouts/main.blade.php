@include('layouts/menu')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<div class="container">
<style>
    html, body {
background-color: #F0E68C;
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
</body>
 <div class="row" style='background-color:#fffff'>@include('layouts/menu')</div>
 <div class="col-9">@yield('content')</div>
  <footer class="footer"></footer>
</div>
