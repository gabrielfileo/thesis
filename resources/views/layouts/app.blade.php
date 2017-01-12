
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>@yield('title') | DLC</title>

      <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}" media="screen,projection" />
      <!--Import custom.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
      <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">

          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
      <!--Import Select2 plugin-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <!--Import VideoJS plugin-->
      <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

      <style>
          body {
              background-image: url({{asset('assets/images/symphony.png')}});
              background-color: #ffffff;
          }
      </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <nav class="top-nav">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="logo"><img src="{{asset('assets/images/logos.png')}}" width="130" height="53">
                        </a>
                        <h1>Design Learning Center</h1>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="sidebar">
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <img class="background" src="{{asset('assets/images/concert.jpg')}}">
                    <a href="#!user"><img class="circle" src="{{asset('assets/images/adele.jpg')}}">
                    </a>
                    <a href="#!name"><span class="white-text name">{{Auth::user()->name}}</span></a>
                </div>
            </li>

            <!--Buttons sideNav-->
            <li><a class="waves-effect" href="{{url('/')}}">Dashboard</a>
            </li>

            <li>
                <div class="divider"></div>
            </li>

            <li><a class="waves-effect" href="{{url('/account')}}">Account Setting</a>
            </li>
          {{--  <li><a class="waves-effect" href="">Help</a>
            </li>--}}
            <li><a class="waves-effect" href="{{ url('/logout') }}">Log Out</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="margin-top:8px;margin-left:15px;">menu</i></a>
    </div>
    @yield('content')

    {{--
    footer dihilangkan dulu untuk sementara
    <footer class="page-footer">
        <div class="footer">
            インドネシア製
        </div>
    </footer>
    --}}
    @yield('script')
</body>

</html>
