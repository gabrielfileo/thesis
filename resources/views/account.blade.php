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
                        @if(Session::has("error"))
                            {{Session::get("error")}}
                        @endif
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
                                <label for="cpassword" style="font-size:14px;">Confirm Password</label>
                            </div>
                        </div>


                        <div class="row">
                            <a><button class="waves-effect waves-light btn red darken-4" data-target="modal1" id="submitForm" type="submit"><i class="material-icons left">done</i>Save</button></a>
                            <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">replay</i>Reset</a>
                        </div>
                        <div id="modal1" class="modal bottom-sheet">
                            <div class="modal-content">
                                <h4>Modal Header</h4>
                                <p>A bunch of text</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>
                    </form>
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


      /*
       $("#submitForm").click(function (e) {
           var pass = $("#password").val();
           var c_pass = $("#cpassword").val();

           e.preventDefault();

           if(pass !== c_pass){
               Materialize.toast('Password not the same!', 4000) // 4000 is the duration of the toast
           }else{
               $(this).submit();
           }
       })*/
</script>

@endsection
