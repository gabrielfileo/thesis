@extends('layouts.app')
@section('title','View Score List')
@section('content')

      <div id="content">

          <div class="box-course-content">
              <div class="box-title">
                  <h2>Adobe Illustrator</h2>
              </div>
              <div class="box-content clearfix">
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 1</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 2</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 3</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 4</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 5</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <div class="box2">
                      <div class="box-title">
                          <h3>Course 6</h3>
                      </div>
                      <div class="box-content">
                          <p>Adobe Illustrator was first developed for the Apple Macintosh in December 1986 (shipping in January 1987) as a commercialization of Adobe's in-house font development software and PostScript file format.</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="course-ills-main.html">ENTER COURSE</a>
                      </div>
                  </div>
                  <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                  </ul>

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
