//head
//header

    <div id="content">

        <div class="box-course-content">
            <div class="box-title">
                <h2>Adobe Photoshop</h2>
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
                        <p>This will teach you the fundamentals of Adobe Photoshop with easy to follow, practical examples. By the conclusion of this video tutorial, you will be fully versed in the use of the basic tools of Adobe Photoshop CS5, and able to open, edit and prepare images for use in print, or digital media such as PDF’s or the Internet. Included are full work files, to allow you to learn right along with the instructor using the exact same files that he does.</p>
                    </div>
                    <div class="box-button">
                        <a class="waves-effect waves-light btn red darken-4" style="width: 140px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                        <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;;"><i class="material-icons left">skip_previous</i>PREV</a>
                        <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;;"><i class="material-icons right">skip_next</i>NEXT</a>
                        <a href="exam-psd-main.html" class="waves-effect waves-light btn teal" style="width: 140px; border-radius:5px;;"><i class="material-icons left">mode_edit</i>TEST</a>
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
</script>

</html>
