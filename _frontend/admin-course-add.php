//head

//header

    <div id="content">

        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-course-add clearfix">
                    <div class="box-title">
                        <h3>Upload New Course</h3>
                    </div>
                    <div class="box-content ">
                        <div class="input-field col s12">
                            <select>
                                <option value="1">Photoshop</option>
                                <option value="2">Illustrator</option>
                            </select>
                            <label style="margin-left:-11px; font-size:16px;">Course</label>
                        </div>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="course_name" type="text" length="20">
                                        <label for="course_name" style="margin-left:-21px;">Course Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="course_desc" class="materialize-textarea" length="150"></textarea>
                                        <label for="course_desc" style="margin-left:-21px;">Course Description</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <form action="#">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4"><i class="material-icons right">send</i>Done</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-course-add.html"><i class="material-icons right">replay</i>Reset</a>
                            <a class="waves-effect waves-light btn grey darken-3" href="admin-dashboard.html"><i class="material-icons right">dashboard</i>Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    //sidebar

    //footer
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

</html>y
