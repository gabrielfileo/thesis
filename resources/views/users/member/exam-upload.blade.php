@extends('layouts.app')
@section('title','Upload Exam Result')
@section('content')


  <div id="content">

        <div class="box">
            <div class="box-title">
                <h2>{{Auth::user()->name}}</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-course-add clearfix">
                    <div class="box-title">
                        <h3>Upload Result</h3>
                    </div>
                    <div class="box-succeed">
                        <p style="color:white; text-align:center;">
                            @if(Session::has("status"))
                                {{Session::get("status")}}
                            @endif
                        </p>
                    </div>
                    <div class="box-content ">
                        <form class="col s12" method="POST" action="{{url('/exam/upload/save')}}" enctype="multipart/form-data" style="padding:0 0">
                            {{csrf_field()}}
                        <div class="row">
                                <div class="row">
                                    <div class="input-field col s12" style="padding:0 0">
                                        <select id="topic_selection" name="topics_id" class="input-opt" style="height:50px !important;">
                                            <option selected disabled>-- choose one --</option>
                                            <option value="1">Photoshop</option>
                                            <option value="2">Illustrator</option>
                                        </select>
                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Course</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12" style="padding:0 0">
                                        <select name="exam_id" class="course_selection" style="height:50px !important;">

                                            {{--examlist parsed data goes here--}}
                                        </select>
                                        <label style="margin-left:-11px; font-size:16px; margin-top:-10px;">Sub-Course</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="answer_comment" name="answer_comment" class="materialize-textarea" style="margin-left:-11px;" length="150"></textarea>
                                        <label for="answer_comment" style="margin-left:-11px;">Comment</label>
                                    </div>
                                </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="file_answer"  >
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
                            <a class="waves-effect waves-light btn grey darken-3" href={{url('/dashboard')}}><i class="material-icons right">dashboard</i>Back</a>
                        </div>
                    </div>
                    </form>
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

        $("#topic_selection").on('change', function () {
            var topic = $(this).val();
            $.ajax({
                method: "POST",
                url: "{{route('ajaxExamList')}}",
                data:{
                    id : topic,
                }
            })
                .done(function (data) {
                    $(".course_selection option").remove();
                    $(".course_selection").material_select('destroy');
                    $.each(JSON.parse(data), function (index, eexam) {
                        $(".course_selection").append("<option value='" + eexam.id + "'>" + eexam.name + "</option>");
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
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
</script>
@endsection
