@extends('layouts.app')
@section('title','Add Exam')
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

                          <form action="" method="post">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select style="height:50px !important;">
                                            <option value="1">Gabriel</option>
                                            <option value="2">Kevin</option>
                                            <option value="3">Yosua</option>
                                            <option value="4">Nakae-San</option>
                                            <option value="5">Masa-San</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Member Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select style="height:50px !important;">
                                            <option value="1">Photoshop</option>
                                            <option value="2">Illustrator</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select style="height:50px !important;">
                                            <option value="1">Course 1</option>
                                            <option value="2">Course 2</option>
                                            <option value="2">Course 3</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s3">
                                        <input id="score" type="text" class="validate" style="width:100%;  margin-left:0%;">
                                        <label for="score">Score</label>
                                    </div>
                                    <div class="input-field col s9">
                                        <input id="score_comment" type="text" class="validate" style="width:100%;  margin-left:0%;" length="150">
                                        <label for="score_commet">Comment</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </form>

                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/manage/score/add')}}"><i class="material-icons right">replay</i>Reset</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-reports')}}"><i class="material-icons right">dashboard</i>Back</a>
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
