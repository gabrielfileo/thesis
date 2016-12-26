@extends('layouts.app')
@section('title','Update Member')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view clearfix">
                    <div class="box-title ">
                        <h3>Update Member</h3>
                    </div>
                    <div class="box-content ">
                        <div class="row">

                            <form class="col s12">

                                <div class="row">
                                    <div class="input-field col s6">
                                      <input disabled value="1701340240" id="NIK" type="text" class="validate" style="width:100%;  margin-left:0%;">
                                      <label for="NIK">NIK</label>
                                    </div>
                                    <div class="input-field col s16">
                                        <select style="height:50px !important;">
                                            @foreach($trainees as $trainee)
                                            <option value="{{$trainee->id}}">{{$trainee->name}}</option>
                                            @endforeach
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Member</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_curr" type="password" class="validate">
                                        <label for="password">Current Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_new" type="password" class="validate">
                                        <label for="password">New Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_confirm" type="password" class="validate">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-trainee-update.html"><i class="material-icons right">replay</i>Reset</a>
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

  	$('input.autocomplete').autocomplete({
      data: {
        "Apple": null,
        "Microsoft": null,
        "Google": null
      }
    });
  </script>
@endsection
