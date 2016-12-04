@extends('layouts.app')
@section('title','View Trainee Score')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view clearfix">
                    <div class="box-title ">
                        <h3>View Trainee Score</h3>
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
                                    <th data-field="full_name" style="width:150px;">Member Name</th>
                                    <th data-field="course"  style="width:150px;">Lastest Course</th>
                                    <th data-field="score"  style="width:150px;">Score</th>
                                    <th data-field="edit">Edit</th>
                                    <th data-field="del">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Gabriel Fileo</td>
                                    <td>Course 1</td>
                                    <td>85</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>Kevin Witomo</td>
                                    <td>Course 1</td>
                                    <td>83</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>Kevin Renata</td>
                                    <td>Course 1</td>
                                    <td>88</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4" href="{{url('Admin')}}"><i class="material-icons left">dashboard</i>Back</a>
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
