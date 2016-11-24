//head
//header

    <div id="content">

        <div class="box">
            <div class="box-title">
                <h2>[USER NAME]</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view clearfix">
                    <div class="box-title ">
                        <h3>Download Exam</h3>
                    </div>
                    <div class="box-content ">
                    	 <div class="input-field col s12">
                            <select>
                                <option value="1">Photoshop</option>
                                <option value="2">Illustrator</option>
                            </select>
                            <label style="margin-left:-11px; font-size:16px;">Course</label>
                        </div>

                        <table class="responsive-table centered striped">
                            <thead>
                                <tr>
                                    <th data-field="course"  style="width:150px;">Course</th>
                                    <th data-field="uploaded"  style="width:150px;">Uploaded on</th>
                                    <th data-field="download">Download</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Course 1</td>
                                    <td>25/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>

                                </tr>
                                <tr>
                                    <td>Course 2</td>
                                    <td>27/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                </tr>
                                <tr>
                                    <td>Course 3</td>
                                    <td>29/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="user-dashboard.html"><i class="material-icons left">dashboard</i>Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   //sdiebar
    
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
