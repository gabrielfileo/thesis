@extends('layouts.app')
@section('title','Dashboard')

@if(Auth::user()->role == 'administrator')
  @section('content')
      <div id="content">
          <div class="box-admin">
              <div class="box-title">
                  <h2>Dashboard</h2>
              </div>
              <blockquote>
                  Welcome, {{Auth::user()->name}}
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
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="manage/trainee/add">Add New Trainee Member</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can add new trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/trainee/edit">Update Trainee Member</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can update trainee member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/trainee">View Trainee Member</a>
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
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="manage/course/add">Upload Course</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can upload new course</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/course">View Course List</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can view course list</p>
                          </div>
                      </div>
                  </div>

                  <div id="admin-exam" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="manage/exam/add">Upload Exam</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can upload new exam</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/exam">View Exam List</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can view exam list here.</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/exam/review">Review Exam Result</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can review exam results from trainee.</p>
                          </div>
                      </div>
                  </div>

                  <div id="admin-reports" class="col s12">
                      <br>
                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="manage/score/add">Input Score</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can input exam score for a member</p>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s3">
                              <a class="waves-effect waves-light btn grey darken-3" style="width:260px;" href="manage/score">View Score</a>
                          </div>

                          <div class="col s9">
                              <p class="admin">You can view score</p>
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
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="{{url('/topics')}}">View Course List</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can view course list</p>
                       </div>
                   </div>
               </div>

               <div id="user-exam" class="col s12">
                   <br>
                   <div class="row">
                       <div class="col s3">
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="{{url('/exam')}}">View Exam List</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can view exam list</p>
                       </div>
                   </div>
             </div>

               <div id="user-reports" class="col s12">
                   <br>
                   <div class="row">
                       <div class="col s3">
                           <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="{{url('/score')}}">Review Score</a>
                       </div>

                       <div class="col s9">
                           <p class="user">You can review your score</p>
                       </div>
                   </div>
               </div>

       </div>
   </div>
  @endsection
@endif

@section('script')
  <script>
      $(document).ready(function() {
          $(".button-collapse ").sideNav();
          $('.collapsible').collapsible();
      });
      $(document).ready(function(){
          @if (Session::has('info'))
                   Materialize.toast('{{Session::get('info')}}', 4000); // 4000 is the duration of the toast
          @endif
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
