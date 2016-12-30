@extends('layouts.app')
@section('title','Input Score')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-score-input clearfix">
                    <div class="box-title ">
                        <h3>Input Trainee Score</h3>
                    </div>
                    <div class="box-content ">
                        <div class="row">

                          <form action="{{url('/manage/exam/add/save')}}" method="POST" class="col s12" >
                            {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="trainee_id" style="height:50px !important;">
                                            @foreach($users as $key=> $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Member Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select id="topic_selection" name="topics_id" style="height:50px !important;">
                                            <option value="1">Photoshop</option>
                                            <option value="2">Illustrator</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select name="course_id" class="course_selection" style="height:50px !important;">
                                            {{--courselist ajax goes here--}}
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s3">
                                        <input id="score" name="exam_score" type="text" class="validate" style="width:100%;  margin-left:0%;">
                                        <label for="score">Score</label>
                                    </div>
                                    <div class="input-field col s9">
                                        <input id="comment" name="score_comment" type="text" class="validate" style="width:100%;  margin-left:0%;" length="150">
                                        <label for="comment">Comment</label>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-reports')}}"><i class="material-icons right">dashboard</i>Back</a>
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
                  console.log(data);
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
