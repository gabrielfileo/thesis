@extends('layouts.app')
@section('title','Login')
@section('head')

    <title>Login</title>
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
@endsection

@section('content')
    <div class="pen-title">
        <h1>Design Learning Center</h1>
    </div>
    <div class="container">
        <div class="card"></div>
        <div class="card">
            <h1 class="title">Sign in to continue</h1>
            <form  method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="input-container">
                    <input type="text" id="Username" name="username" value="{{ old('username') }}" required/>
                    <label for="Username">Username</label>
                    <div class="bar"></div>
                </div>

                <div class="input-container">
                    <input type="password" id="Password" name="password" required/>
                    <label for="Password">Password</label>
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                        <button type="submit"><span>LOGIN</span>
                        </button>
                </div>
                <div class="footer">Contact Your Leader / Administrator if You're having trouble accessing this dashboard.</div>
            </form>
        </div>
        <div class="card alt">
            <div class="toggle"></div>
            <h1 class="title">What is This?
                <div class="close"></div>
            </h1>
            <h1 class="title subtitle">This app is used to train new design division staff</h1>
        </div>
    </div>

    <p class="center"><img src="{{asset('assets/images/logo.png')}}" />
    </p>
@endsection

@yield('test')

@section('javascript')
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assets/js/index.js')}}"></script>
@endsection
