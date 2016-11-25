
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>DLC - @yield('title')</title>

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
      <style>
          body {
              background-image: url({{asset('assets/images/symphony.png')}});
              background-color: #ffffff;
          }
      </style>
</head>

<body>
    @yield('header')
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
            <li><a class="waves-effect" href="admin-dashboard.html">Dashboard</a>
            </li>

            <li>
                <div class="divider"></div>
            </li>

            <li><a class="waves-effect" href="account.html">Account Setting</a>
            </li>
            <li><a class="waves-effect" href="">Help</a>
            </li>
            <li><a class="waves-effect" href="{{ url('/logout') }}">Log Out</a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="margin-top:8px;margin-left:15px;">menu</i></a>
    </div>
    @yield('content')
    @yield('footer')
</body>
    <script>
        $(document).ready(function() {
            $(".button-collapse ").sideNav();
            $('.collapsible').collapsible();
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });

        $(document).ready(function() {
            $('select').material_select();
        });
         $(document).ready(function() {
        Materialize.updateTextFields();
      });
    </script>
</html>
