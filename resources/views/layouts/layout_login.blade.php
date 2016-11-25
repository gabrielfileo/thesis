
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DLC - @yield('title')</title>
          <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" >
          <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
          <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
          <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
          <style>
              body {
                  background-image: url({{asset('assets/images/symphony.png')}});
                  background-color: #ffffff;
              }
          </style>
  </head>

  <body>
      @yield('header')
      @yield('content')
      @yield('footer')
  </body>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assets/js/index.js')}}"></script>

</html>
