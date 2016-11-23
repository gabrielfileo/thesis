//head
//header

    <div id="content">

        <div class="box-course-content">
            <div class="box-title">
                <h2>Adobe Illustrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-video clearfix">
                    <div class="box-title">
                        <h3>Exam 1</h3>
                    </div>
                    <div class="box-content">
                        <div class="valign-wrapper">
                          <h5 class="valign"><img class="materialboxed" width="300" src="images/PSD Exam/exam 1.jpg" ></h5>
                        </div>
                        <div class="divider vivid"></div>
                        <p>Although during its first decade Adobe developed Illustrator primarily for Macintosh, it sporadically supported other platforms. In the early 1990s, Adobe released versions of Illustrator for NeXT, Silicon Graphics, and Sun Solaris platforms, but they were discontinued due to poor market acceptance. The first version of Illustrator for Windows, version 2.0, was released in early 1989 and flopped.</p>
                    </div>
                    <div class="box-button">
                        <a class="waves-effect waves-light btn red darken-4" style="width: 150px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                        <a class="waves-effect waves-light btn teal" style="width: 200px; border-radius:5px;;"><i class="material-icons left">play_for_work</i>Download</a>
                        <a href="user-exam-upload.html" class="waves-effect waves-light btn red darken-4" style="width: 250px; border-radius:5px;;"><i class="material-icons left">send</i>Upload Result</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    //sidebar


    //footer

</body>
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

  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.material-placeholder').width('100%');
  });
</script>

</html>
