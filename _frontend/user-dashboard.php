//head

//header

    <div id="content">

        <div class="box-user">
            <div class="box-title">
                <h2>Dashboard - [USER NAME]</h2>
            </div>
            <blockquote>
                Welcome, [USER NAME].
            </blockquote>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#user-course">Course</a>
                        </li>
                        <li class="tab col s3"><a href="#user-exam">Exam</a>
                        </li>
                        <li class="tab col s3"><a href="#user-reports">Report</a>
                        </li>
                    </ul>
                </div>

                <div id="user-course" class="col s12">
                    <br>
                    <div class="row">
                        <div class="col s3">
                            <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="course.html">View Course List</a>
                        </div>

                        <div class="col s9">
                            <p class="user">You can delete trainee member</p>
                        </div>
                    </div>
                </div>

                <div id="user-exam" class="col s12">
                    <br>
                    <div class="row">
                        <div class="col s3">
                            <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="user-exam-review.html">View Exam List</a>
                        </div>

                        <div class="col s9">
                            <p class="user">You can delete trainee member</p>
                        </div>
                    </div>
            	</div>

                <div id="user-reports" class="col s12">
                    <br>
                    <div class="row">
                        <div class="col s3">
                            <a class="waves-effect waves-light btn red darken-4" style="width:260px;" href="user-score-view.html">Review Score</a>
                        </div>

                        <div class="col s9">
                            <p class="user">You can delete trainee member</p>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    //sidebar
    
    //footer
    </div>

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
