@extends('layouts.app')
@section('title','Dashboard')
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
