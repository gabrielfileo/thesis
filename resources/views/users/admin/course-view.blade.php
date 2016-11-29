@extends('layouts.app')
@section('title','View Course')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-course-view clearfix">
                    <div class="box-title ">
                        <h3>View Courses</h3>
                    </div>
                    <div class="box-content ">


                        <table class="responsive-table centered striped">
                            <thead>
                                <tr class="courses">
                                    <th data-field="full_name" style="width:250px; font-size:16px;">Course Name</th>
                                    <th data-field="Join" style="width:250px;font-size:16px;">Upload Date</th>
                                    <th data-field="score" style="font-size:16px;">Description</th>
                                    <th data-field="edit" style="width:50px;font-size:16px;">Edit</th>
                                    <th data-field="del" style="width:50px;font-size:16px;"font-size:16px;>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Course 1</td>
                                    <td>25/08/2015</td>
                                    <td>This Adobe Photoshop training course will provide an introduction into the powerful Adobe Photoshop suite that will teach you how to optimise and create digital images. </td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>Course 2</td>
                                    <td>25/08/2015</td>
                                    <td>This Adobe Photoshop training course will provide an introduction into the powerful Adobe Photoshop suite that will teach you how to optimise and create digital images. </td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>Course 3</td>
                                    <td>25/08/2015</td>
                                    <td>This Adobe Photoshop training course will provide an introduction into the powerful Adobe Photoshop suite that will teach you how to optimise and create digital images. </td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="admin-dashboard.html"><i class="material-icons left">dashboard</i>Back</a>
                            <a class="waves-effect waves-light btn red darken-4" style="width:180px;" href="admin-course-add.html"><i class="material-icons left">add</i>Upload</a>
                        </div>
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
</script>
@endsection
