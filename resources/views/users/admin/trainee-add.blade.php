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

                    <form action="" method="post">
                    <div class="box-content ">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="1701340240" id="NIK" type="text" class="validate" style="width:100%; margin-left:0%;">
                                        <label for="NIK">Nomor Induk Karyawan</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="full_name" type="text" class="validate" style="width:100%;  margin-left:0%;">
                                        <label for="full_name">Full Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="5 - 10 characters"id="password_new" type="password" class="validate">
                                        <label for="password">New Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="5 - 10 characters"id="password_confirm" type="password" class="validate">
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
                  </form>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-trainee-add.html"><i class="material-icons right">replay</i>Reset</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-user')}}"><i class="material-icons right">dashboard</i>Back</a>
                        </div>
                    </div>
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
