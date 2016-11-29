@extends('layouts.app')
@section('title','Account Setting')


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
                                <input value="{{Auth::user()->name}}" id="first_name2" name="fullName" type="text" class="validate" required minlength="3" style="margin-left:0px; width:100%">
                                <label class="active" for="first_name2" data-error="must be 3 characters or more" style="font-size:14px;">Full Name</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="old_password" type="password" name="old_password" class="validate" required>
                                <label for="password"  style="font-size:14px;">Current Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="new_password" class="validate" minlength="6">
                                <label for="password" data-error="must be 6 characters or more" style="font-size:14px;">New Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cpassword" type="password" name="cpassword" class="validate" required >
                                <label for="cpassword" data-error="Password not match" data-success="Password match" style="font-size:14px;">Confirm Password</label>
                            </div>
                        </div>

                            <p>
                                <input type="checkbox" id="test5" required />
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


        var password = document.getElementById("password"), cpassword = document.getElementById("cpassword");

        function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
              confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

    </script>
@endsection
{{--$("#password").on("focusout", function (e) {
      if ($(this).val() != $("#cpassword").val()) {
          $("#cpassword").removeClass("valid").addClass("invalid");
      } else {
          $("#cpassword").removeClass("invalid").addClass("valid");
      }
  });

  $("#cpassword").on("keyup", function (e) {
      if ($("#password").val() != $(this).val()) {
          $(this).removeClass("valid").addClass("invalid");
      } else {
          $(this).removeClass("invalid").addClass("valid");
      }
  });
  var password = $("password").val();
  var c_password = $("cpassword").val();

  if (password != c_password){
    $("cpassword").addClass("invalid");
  }

  --}}
