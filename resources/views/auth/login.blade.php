@extends('layouts.layout_login')
@section('title','Login')


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
                @if (count($errors) > 0) {{--Mohon dipercantik lagi tampilan error message ini--}}
                  <div class="box-warn" style="background-color: #ce152b;
                                              width: 50%;
                                              margin: 0px 19%;
                                              padding: 1px 25px;
                                              border-radius: 3px;
                                              margin-top: 25px;">
                    <p style="color:white; text-align:center;">
                      @foreach ($errors->all() as $error)
                          {{$error}}
                      @endforeach
                    </p>
                  </div>
                @else
                  <div class="box-trans" style="background-color: #ffffff;
                                              width: 50%;
                                              margin: 0px 19%;
                                              padding: 1px 25px;
                                              border-radius: 3px;
                                              margin-top: 25px;">
                    <p style="color:white; text-align:center;">

                    </p>
                  </div>
                @endif


                <div class="footer">
                  Contact Your Leader / Administrator if You're having trouble accessing this dashboard.</div>
            </form>
        </div>
        <div class="card alt">
            <div class="toggle"></div>
            <h1 class="title">Forgot password?
                <div class="close"></div>
            </h1>
            <h1 class="title subtitle">Contact your Team Leader</h1>
        </div>
    </div>

    <p class="center"><img src="{{asset('assets/images/logo.png')}}" />
    </p>
@endsection
