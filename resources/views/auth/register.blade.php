{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
        <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Trainee</title>
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" >
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}" media="screen,projection" />
    <!--Import custom.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <style>
        body {
            background-image: url({{asset('assets/images/symphony.png')}});
        header, main, footer {
            padding-left: 300px;
        }
        @media only screen and (max-width: 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .button-collapse {
            position: absolute;
            left: 30px;
            top: 15px;
        }
        .logo {
            display: inline-block;
            width: 100%;
            height: 53px;
        }
    </style>
</head>

<body>

<div id="wrapper">
    <div id="header">
        <nav class="top-nav">
            <div class="container">
                <div class="nav-wrapper">
                    <a class="logo"><img src="{{asset('assets/images/logos.png')}}" width="130" height="53">
                    </a>
                    <h1>Design Learning Center</h1>

                </div>
            </div>
        </nav>
    </div>
</div>

<div id="content">

    <div class="box">
        <div class="box-title">
            <h2>Administrator</h2>
        </div>
        <div class="box-content-material clearfix">
            <div class="box-trainee-add clearfix">
                <div class="box-title ">
                    <h3>Add New Member</h3>
                </div>
                <div class="box-content ">
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ url('/register') }}>
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="1701340240" id="NIK" type="text" name="nik" class="validate" style="width:100%; margin-left:0%;">
                                    <label for="NIK">Nomor Induk Karyawan</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="full_name" type="text" name="name" class="validate" style="width:100%;  margin-left:0%;">
                                    <label for="full_name">Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password_new" type="password" name="password" class="validate">
                                    <label for="password">New Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password_confirm" type="password" class="validate" name="password_confirmation">
                                    <label for="password">Confirm Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="date" id="Join" class="datepicker" style="width:100%; margin-left:0%">
                                    <label for="Join">Join Date</label>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="box-button ">
                    <div class="row">
                        <button class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Done</button>
                        <a class="waves-effect waves-light btn grey darken-3" href="admin-trainee-add.html"><i class="material-icons right">replay</i>Reset</a>
                        <a class="waves-effect waves-light btn grey darken-3" href="admin-dashboard.html"><i class="material-icons right">dashboard</i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidebar">
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="userView">
                <img class="background" src="{{asset('assets/images/concert.jpg')}}">
                <a href="#!user"><img class="circle" src="{{asset('assets/images/adele.jpg')}}">
                </a>
                <a href="#!name"><span class="white-text name">Gabriel FS</span></a>
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
        <li><a class="waves-effect" href="#!">Log Out</a>
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="margin-top:8px;margin-left:15px;">menu</i></a>
</div>

<footer class="page-footer ">
    <div class="footer ">
        Made with Passion by GY
    </div>
</footer>

</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>

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
