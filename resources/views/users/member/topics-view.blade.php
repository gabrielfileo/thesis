@extends('layouts.app')
@section('title','View Topics List')
@section('content')
  <div id="content">

  <div class="box-course">
      <div class="box-title">
          <h2>Courses</h2>
      </div>
      <div class="box-content clearfix">
          <div class="box2 fL">
              <div class="box-title">
                  <h3>Adobe Photoshop</h3>
              </div>
              <div class="box-content">
                  <p>Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for macOS and Windows. Photoshop was created in 1988 by Thomas and John Knoll.</p>
              </div>
              <div class="box-button">
                  <a href="course-psd.html" class="waves-effect waves-light btn red darken-4" style="width: 100%;">ENTER COURSE</a>
              </div>
          </div>
          <div class="box2 fR">
              <div class="box-title">
                  <h3>Adobe Illustrator</h3>
              </div>
              <div class="box-content">
                  <p>Adobe Illustrator is a vector graphics editor developed and marketed by Adobe Systems. The latest version, Illustrator CC 2015.3, is the twentieth generation in the product line.</p>
              </div>
              <div class="box-button">
                  <a href="course-ills.html" class="waves-effect waves-light btn red darken-4" style="width: 100%;">ENTER COURSE</a>
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
