@extends('layouts.app')
@section('title','View Exam List')
@section('content')


<div id="content">

    <div class="box">
        <div class="box-title">
            <h2>{{Auth::user()->name}}</h2>
        </div>
        <div class="box-content-material clearfix">
            <div class="box-trainee-view clearfix">
                <div class="box-title ">
                    <h3>Download Exam</h3>
                </div>
                <div class="box-content ">
                  <div class="row">
                      <div class="col s12">
                          <ul class="tabs">
                              <li class="tab col s6"><a class="active" href="#view-psd">Photoshop</a>
                              </li>
                              <li class="tab col s6"><a href="#view-ills">Illustrator</a>
                              </li>
                          </ul>
                      </div>
                  </div>

                  <div id="view-psd" class="col s12">
                    <table class="responsive-table centered striped">
                        <thead>
                            <tr>
                                <th data-field="course"  style="width:300px;"> Course Name</th>
                                <th data-field="date"  style="width:150px;">Upload Date</th>
                                <th data-field="desc" style="width:500px;">Description</th>
                                <th data-field="download" style="width:150px;">Problems</th>
                                <th data-field="download" style="width:150px;">Answer</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                              <td>Course 1</td>
                              <td>85</td>
                              <td>-</td>
                              <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                              <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>

                            </tr>
                            <tr>
                                <td>Course 1</td>
                                <td>83</td>
                                <td>-</td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                            </tr>
                            <tr>
                                <td>Course 1</td>
                                <td>88</td>
                                <td>-</td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>

                  <div id="view-ills" class="col s12">
                    <table class="responsive-table centered striped">
                        <thead>
                            <tr>
                                <th data-field="course"  style="width:300px;"> Course Name</th>
                                <th data-field="date"  style="width:150px;">Upload Date</th>
                                <th data-field="desc" style="width:500px;">Description</th>
                                <th data-field="download" style="width:150px;">Problems</th>
                                <th data-field="download" style="width:150px;">Answer</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                              <td>Course 1</td>
                              <td>85</td>
                              <td>-</td>
                              <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                              <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>

                            </tr>
                            <tr>
                                <td>Course 1</td>
                                <td>83</td>
                                <td>-</td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                            </tr>
                            <tr>
                                <td>Course 1</td>
                                <td>88</td>
                                <td>-</td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>

                </div>

                <div class="box-button ">
                    <div class="row">
                        <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="{{url('dashboard')}}"><i class="material-icons left">dashboard</i>Back</a>
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
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
</script>
@endsection
