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
                            <form class="col s12" id="topics" name="topics_id" style="padding:0 0">
                            {{ Form::open(['url' => '/manage/exam/add/save']) }}
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12" style="padding:0 0">
                                        <select id="topic_selection" class="input-opt">
                                            <option value="1">Photoshop</option>
                                            <option value="2">Illustrator</option>
                                        </select>
                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="input-field col s12" id="course" name="course_id" style="padding:0 0">
                                        <select class="course_selection" style="height:50px !important;">

                                        </select>

                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="exam_desc" name="exam_desc" class="materialize-textarea" style="margin-left:-11px;" length="150"></textarea>
                                        <label for="course_desc" style="margin-left:-11px;">Exam Description</label>
                                    </div>
                                </div>
                        </div>

                          <div class="row">
                              <div class="file-field input-field">
                                  <div class="btn">
                                      <span>Upload Exam Photo</span>
                                      <input type="file" name="photo_exam" validate >
                                  </div>
                                  <div class="file-path-wrapper">
                                      <input class="file-path validate" name="photo_path" type="text">
                                  </div>
                              </div>
                          </div>

                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="file_exam" validate >
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="file_path" type="text">
                                    </div>

                                </div>
                                  <label>Firstly, please ZIP the file</label>
                            </div>



                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a><button onclick="return confirm('Are you sure?')"  class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Done</button></a>
                            <a><button class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</button></a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-exam')}}"><i class="material-icons right">dashboard</i>Back</a>
                        </div>
                    </div>
                    {{ Form::close() }}
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

          $("#topic_selection").on('change', function () {
              var topic = $(this).val();
              $.ajax({
                  method: "POST",
                  url: "{{route('ajaxCourseList')}}",
                  data:{
                      id : topic,
                  }
              })
              .done(function (data) {

                  $(".course_selection option").remove();
                  $(".course_selection").material_select('destroy');
                  $.each(JSON.parse(data), function (index, ccourse) {
                     $(".course_selection").append("<option value='" + ccourse.id + "'>" + ccourse.name + "</option>");
                  });
                  $(".course_selection").material_select('destroy');
                  $(".course_selection").material_select();
                 /* masukin ini */
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
