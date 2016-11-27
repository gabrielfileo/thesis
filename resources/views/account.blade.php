@extends('layouts.app')
@section('title','Account Setting')
@section('header')
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
@endsection

@section('content')
    <div id="content">
            <div class="box-account">
                <div class="box-title">
                    <h2>Account Setting</h2>
                </div>
                <blockquote>
                    You'll be automatically logged out if the password changing was success!. Leave New Password & Confirmation Blank if you don't want to change your password.
                </blockquote>
                <div class="row">
                    <form method="POST" action="{{url('/account/save')}}" class="col s12">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled value="{{Auth::user()->username}}" id="disabled" type="text" class="validate" name="username"  style="margin-left:0px; width:100%">
                                <label for="disabled">NIK</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input value="{{Auth::user()->name}}" id="first_name2" name="fullName" type="text" class="validate" required="" minlength="5" style="margin-left:0px; width:100%">
                                <label class="active" for="first_name2" data-error="wrong" style="font-size:14px;">Full Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">   
                                <input id="password" type="password" name="old_password" class="validate">
                                <label for="password">Current Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="new_password" class="validate">
                                <label for="password">New Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="cpassword" class="validate">
                                <label for="password">Confirm Password</label>
                            </div>
                        </div>

                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">I agree with my password change.</label>
                            </p>


                        <div class="row">
                            <a ><button class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons left">done</i>Save</button></a>
                            <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">replay</i>Reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

{{--@section('script')
        $("#formValidate").validate({
            rules: {
                first_name2: {
                    required: true,
                    minlength: 5
                },
            },
            //For custom messages
            messages: {
                first_name2:{
                    required: "Name cannot be empty",
                    minlength: "Enter at least 5 characters"
                }
            },
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
@endsection--}}

