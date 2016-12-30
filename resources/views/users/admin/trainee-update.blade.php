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

                            <form method="POST" action="{{url('/manage/trainee/edit/save')}}" class="col s12">
                                  {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s6">
                                      <input disabled value=" " id="nik" name="trainee_username" type="text" class="nik validate" style="width:100%;  margin-left:0%;">
                                      <label for="nik">NIK</label>
                                    </div>
                                    <div class="input-field col s16">
                                        <select id="user_selection" name="trainee_id" style="height:50px !important;">
                                            @foreach($trainees as $trainee)
                                            <option value="{{$trainee->id}}">{{$trainee->name}}</option>
                                            @endforeach
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Member</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_curr" name="old_password" type="password" class="validate">
                                        <label for="password">Current Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_new" name="new_password" type="password" class="validate">
                                        <label for="password">New Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_confirm" name="cpassword" type="password" class="validate">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                </div>


                        </div>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                          <a><button onclick="return confirm('Are you sure?')"  class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Done</button></a>
                          <a><button class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</button></a>
                          <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-user')}}"><i class="material-icons right">dashboard</i>Back</a>
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

          $("#user_selection").on('change', function () {
              var user = $(this).val();
              $.ajax({
                  method: "POST",
                  url: "{{route('ajaxUserList')}}",
                  data:{
                      id : user,
                  }
              })
              .done(function (data) {
                  user=JSON.parse(data);
                  $(".nik").val("") ;
                  $(".nik").val(user.username);

              });
          });

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
