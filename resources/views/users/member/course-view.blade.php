@extends('layouts.app')
@section('title','COURSE NAME HERE')
@section('content')
  <div id="content">

         <div class="box-course-content">
             <div class="box-title">
                 <h2> @if($value->topics_id == 1) Adobe Photoshop
                      @elseif ($value->topics_id == 2) Adobe Illustrator @endif
                 </h2>
             </div>
             <div class="box-content-material clearfix">
                 <div class="box-video clearfix">
                     <div class="box-title">
                         <h3>{{ $value->name }}</h3>
                     </div>
                     <div class="box-content">
                         <video class="responsive-video" controls>
                             <source src="{{url('videos/'.$value->video_path)}}" type="video/mp4">
                               <body>
                          </video>
                         <div class="divider vivid"></div>
                         <p>{{ $value->description }}</p>
                     </div>
                     <div class="box-button">
                         <a class="waves-effect waves-light btn red darken-4" style="width: 140px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                         <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;" disabled><i class="material-icons left">skip_previous</i>PREV</a>
                         <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;" ><i class="material-icons right">skip_next</i>NEXT</a>
                         <a href="exam-ills-main.html" class="waves-effect waves-light btn teal" style="width: 140px; border-radius:5px;;"><i class="material-icons left">mode_edit</i>TEST</a>
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
