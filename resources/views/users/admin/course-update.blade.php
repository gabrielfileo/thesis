@extends('layouts.app')
@section('title','Update Course')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>

            <div class="box-content-material clearfix">
                <form method="POST" action="{{url('/manage/course/edit/'.$value->id.'/update')}}" class="col s12" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="box-course-add clearfix">
                    <div class="box-title">
                        <h3>Update Course</h3>
                    </div>

                    <div class="box-content ">

                        <div class="row">
                                <div class="row">
                                    <select disabled class="col s12" id="topics" name="topics_id" >
                                      <option value="1" @if($value->topics_id == 1) selected="selected" @endif>Photoshop</option>
                                      <option value="2" @if($value->topics_id == 2) selected="selected" @endif>Illustrator</option>
                                    </select>
                                    <label style="margin-left:-11px; font-size:16px;">Course</label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="course_name" name="course_name" type="text" value="{{ $value->name }}" required minlength="5" maxlength="40" length="40">
                                        <label for="course_name">Course Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="course_desc" name="course_desc" class="materialize-textarea" required minlength="25" maxlength="150" length="150">{{ $value->description }}</textarea>
                                        <label for="course_desc">Course Description</label>
                                    </div>
                                </div>

                        </div>

                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="file_course" validate >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="file_path" type="text">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a><button onclick="return confirm('Are you sure?')"  class="waves-effect waves-light btn red darken-4" type="submit"><i class="material-icons right">send</i>Update</button></a>
                            <a><button class="waves-effect waves-light btn grey darken-3" type="reset"><i class="material-icons right">replay</i>Reset</button></a>
                            <a class="waves-effect waves-light btn grey darken-3" href="{{url('/manage/course')}}"><i class="material-icons right">dashboard</i>Back</a>
                        </div>
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

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }

      $("#inputgambar").change(function () {
        readURL(this);
      });
  </script>


@endsection
