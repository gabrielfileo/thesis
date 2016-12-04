@extends('layouts.app')
@section('title','Add New Member')
@section('content')
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

                    <form method="POST" action="{{url('/manage/trainee/add/save')}}" class="col s12">
                        {{csrf_field()}}
                        @if(Session::has("status"))
                            {{Session::get("status")}}
                        @endif
                    <div class="box-content ">
                        <div class="row">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="1701340240" id="NIK" type="text"  name="username" class="validate" style="width:100%; margin-left:0%;">
                                        <label for="NIK">Nomor Induk Karyawan</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="full_name" type="text" class="validate"  name="fullName" style="width:100%;  margin-left:0%;">
                                        <label for="full_name">Full Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="5 - 10 characters"id="password_new" name="password" type="password" class="validate">
                                        <label for="password">New Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="5 - 10 characters"id="password_confirm" name="cpassword" type="password" class="validate">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="date" id="Join" class="datepicker"  name="join_date" style="width:100%; margin-left:0%">
                                        <label for="Join">Join Date</label>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="box-button ">
                        <div class="row">
                            <a><button class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Done</button></a>
                            <a><button class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</button></a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('Admin')}}"><i class="material-icons right">dashboard</i>Back</a>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
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
@endsection
