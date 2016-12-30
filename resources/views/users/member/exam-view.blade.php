@extends('layouts.app')
@section('title','COURSE NAME Exam')
@section('content')


  <div id="content">

       <div class="box-course-content">
           <div class="box-title">
               <h2>Adobe Illustrator</h2>
           </div>
           <div class="box-content-material clearfix">
               <div class="box-video clearfix">
                   <div class="box-title">
                       <h3>{{$value->course->name}}</h3>
                   </div>
                   <div class="box-content">
                       <div class="valign-wrapper">
                         <h5 class="valign"><img class="materialboxed" width="300" src="{{url('storage/photos/'.$value->image_path)}}" ></h5>
                       </div>
                       <div class="divider vivid"></div>
                       <p>{{$value->course->description}}</p>
                   </div>
                   <div class="box-button">
                      <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;" href="{{url('topics/'.$value->topics_id.'/course/'.$value->course_id)}}"><i class="material-icons left" >dashboard</i>BACK</a>
                       <a class="waves-effect waves-light btn red darken-4" style="width: 150px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                       <a class="waves-effect waves-light btn teal" style="width: 200px; border-radius:5px;;"><i class="material-icons left">play_for_work</i>Download</a>
                       <a href="{{url('/exam/upload')}}" class="waves-effect waves-light btn red darken-4" style="width: 250px; border-radius:5px;;"><i class="material-icons left">send</i>Upload Result</a>
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
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
</script>
@endsection
