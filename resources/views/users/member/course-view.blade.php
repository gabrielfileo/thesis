@extends('layouts.app')
@section('title','COURSE NAME HERE')
@section('content')
  <div id="content">

         <div class="box-course-content">
             <div class="box-title">
                 <h2>Adobe Illustrator</h2>
             </div>
             <div class="box-content-material clearfix">
                 <div class="box-video clearfix">
                     <div class="box-title">
                         <h3>Course 1</h3>
                     </div>
                     <div class="box-content">
                         <video class="responsive-video" controls>
                             <source src="videos/Wildlife.wmv" type="video/wmv">
                         </video>
                         <div class="divider vivid"></div>
                         <p>Although during its first decade Adobe developed Illustrator primarily for Macintosh, it sporadically supported other platforms. In the early 1990s, Adobe released versions of Illustrator for NeXT, Silicon Graphics, and Sun Solaris platforms, but they were discontinued due to poor market acceptance. The first version of Illustrator for Windows, version 2.0, was released in early 1989 and flopped.</p>
                     </div>
                     <div class="box-button">
                         <a class="waves-effect waves-light btn red darken-4" style="width: 140px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                         <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;;"><i class="material-icons left">skip_previous</i>PREV</a>
                         <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;;"><i class="material-icons right">skip_next</i>NEXT</a>
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
