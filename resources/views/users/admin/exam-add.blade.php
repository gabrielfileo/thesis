@extends('layouts.app')
@section('title','Add Exam')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-course-add clearfix">
                    <div class="box-title">
                        <h3>Upload New Exam</h3>
                    </div>
                    <div class="box-content ">
                        <div class="row">
                            <form class="col s12" style="padding:0 0">
                                <div class="row">
                                    <div class="input-field col s12" style="padding:0 0">
                                        <select class="input-opt">
                                            <option value="1">Photoshop</option>
                                            <option value="2">Illustrator</option>
                                        </select>
                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                </div>

                                <form action="" method="post">
                                <div class="row">
                                    <div class="input-field col s12" style="padding:0 0">
                                        <select style="height:50px !important;">
                                            <option value="1">Course 1</option>
                                            <option value="2">Course 2</option>
                                            <option value="2">Course 3</option>
                                        </select>
                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="course_desc" class="materialize-textarea" style="margin-left:-11px;" length="150"></textarea>
                                        <label for="course_desc" style="margin-left:-11px;">Exam Description</label>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <form action="#">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <label>Firstly, please ZIP the file</label>
                        </form>


                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-exam-add.html"><i class="material-icons right">replay</i>Reset</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-dashboard.html"><i class="material-icons right">dashboard</i>Back</a>
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
