@extends('layouts.app')
@section('title','Update Score')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-score-input clearfix">
                    <div class="box-title ">
                        <h3>Update Trainee Score</h3>
                    </div>
                    <div class="box-content ">
                        <div class="box-succeed">
                            <p style="color:white; text-align:center;">
                                @if(Session::has("warning"))
                                    {{Session::get("warning")}}
                                @endif
                                @if(Session::has("success"))
                                    {{Session::get("success")}}
                                @endif
                            </p>
                        </div>
                        <div class="row">
                              <form method="POST" action="{{url('/manage/score/edit/'.$value->id.'/update')}}" class="col s12" >
                                  {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select disabled name="user_id" style="height:50px !important;">
                                            <option value="{{$value->user_id}}">{{$value->user_name}}</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Member Name</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select disabled name="topics_id" style="height:50px !important;">
                                            <option value="1" @if($value->topics_id == 1) selected="selected" @endif>Photoshop</option>
                                            <option value="2" @if($value->topics_id == 2) selected="selected" @endif>Illustrator</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <select style="height:50px !important;">
                                            <option value="{{$value->answer_id}}">{{$value->course_name}}</option>
                                        </select>
                                        <label style="margin-left:0px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s3">
                                        <input id="score" value="{{$value->score}}"name="answer_score"type="text" class="validate" style="width:100%;  margin-left:0%;">
                                        <label for="score">Score</label>
                                    </div>
                                    <div class="input-field col s9">
                                        <input id="score_comment" value="{{$value->comment}}" name="score_comment" type="text" class="validate" style="width:100%;  margin-left:0%;" length="150">
                                        <label for="score_commet">Comment</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="box-button ">
                        <div class="row">
                            <a><button onclick="return confirm('Are you sure?')"  class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Update</button></a>
                            <a><button class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</button></a>
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
