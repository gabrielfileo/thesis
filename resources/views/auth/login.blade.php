@extends('layouts.app')
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
