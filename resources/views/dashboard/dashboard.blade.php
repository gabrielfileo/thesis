@extends('layouts.app')

@section('title','Dashboard')

@section('head')
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}" media="screen,projection" />
    <!--Import custom.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">

        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/materialize.min.js')}}"></script>
@endsection

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

@section('sidebar')
      <div class="sidebar">
          <ul id="slide-out" class="side-nav">
              <li>
                  <div class="userView">
                      <img class="background" src="{{asset('assets/images/concert.jpg')}}">
                      <a href="#!user"><img class="circle" src="{{asset('assets/images/adele.jpg')}}">
                      </a>
                      <a href="#!name"><span class="white-text name">{{Auth::user()->name}}</span></a>
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
              <li><a class="waves-effect" href="{{ url('/logout') }}">Log Out</a>
              </li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="margin-top:8px;margin-left:15px;">menu</i></a>
      </div>
@endsection

@if(Auth::user()->role == 'administrator')
  @section('content')
      <div id="content">
          <div class="box-admin">
              <div class="box-title">
                  <h2>Dashboard - Administrator</h2>
              </div>
              <blockquote>
                  Welcome to The Admin page.
              </blockquote>

              <div class="row">
                  <div class="col s12">
                      <ul class="tabs">
                          <li class="tab col s3"><a class="active" href="#admin-user">Manage Trainee</a>
                          </li>
                          <li class="tab col s3"><a href="#admin-course">Manage Course</a>
                          </li>
                          <li class="tab col s3"><a href="#admin-exam">Manage Exam</a>
                          </li>
                          <li class="tab col s3"><a href="#admin-reports">Manage Report</a>
                          </li>
                      </ul>
                  </div>

                  <div id="admin-user" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="admin-trainee-add.html">Add New Trainee Member</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can add new trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="admin-trainee-update.html">Update Trainee Member</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can update trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="admin-trainee-view.html">View Trainee Member</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can view trainee member</p>
                          </div>
                      </div>
                  </div>

                  <div id="admin-course" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="admin-course-add.html">Upload Course</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can add new trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="admin-course-view.html">View Course List</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can delete trainee member</p>
                          </div>
                      </div>
                  </div>

                  <div id="admin-exam" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="admin-exam-add.html">Upload Exam</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can add new trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="admin-exam-review.html">Review Exam</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can delete trainee member</p>
                          </div>
                      </div>
                  </div>

                  <div id="admin-reports" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="admin-score-add.html">Input Score</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can add new trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="admin-score-view.html">Review Score</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can delete trainee member</p>
                          </div>
                      </div>
                  </div>

          </div>
      </div>
  @endsection

@else
  @section('content')
    <div id="content">

       <div class="box-user">
           <div class="box-title">
               <h2>Dashboard - {{Auth::user()->name}}</h2>
           </div>
           <blockquote>
               Welcome, {{Auth::user()->name}}.
           </blockquote>

           <div class="row">
               <div class="col s12">
                   <ul class="tabs">
                       <li class="tab col s3"><a href="#user-course">Course</a>
                       </li>
                       <li class="tab col s3"><a href="#user-exam">Exam</a>
                       </li>
                       <li class="tab col s3"><a href="#user-reports">Report</a>
                       </li>
                   </ul>
               </div>

               <div id="user-course" class="col s12">
                   <br>
                   <div class="row">
                       <div class="col s3">
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="course.html">View Course List</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can delete trainee member</p>
                       </div>
                   </div>
               </div>

               <div id="user-exam" class="col s12">
                   <br>
                   <div class="row">
                       <div class="col s3">
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="user-exam-review.html">View Exam List</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can delete trainee member</p>
                       </div>
                   </div>
             </div>

               <div id="user-reports" class="col s12">
                   <br>
                   <div class="row">
                       <div class="col s3">
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="user-score-view.html">Review Score</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can delete trainee member</p>
                       </div>
                   </div>
               </div>

       </div>
   </div>
  @endsection
@endif


@section('footer')
      <footer class="page-footer">
           <div class="footer">
              インドネシア製
           </div>
      </footer>
@endsection

@section('javascript')
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
