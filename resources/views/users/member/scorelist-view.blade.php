@extends('layouts.app')
@section('title','View Score List')
@section('content')

  <div id="content">

      <div class="box">
          <div class="box-title">
              <h2>{{Auth::user()->name}}</h2>
          </div>
          <div class="box-content-material clearfix">
              <div class="box-trainee-view clearfix">
                  <div class="box-title ">
                      <h3>Your Score</h3>
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
                                  <th data-field="score"  style="width:150px;">Score</th>
                                  <th data-field="comment">Comment</th>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td>Course 1</td>
                                  <td>85</td>
                                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>

                              </tr>
                              <tr>
                                  <td>Course 2</td>
                                  <td>83</td>
                                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>

                              </tr>
                              <tr>
                                  <td>Course 3</td>
                                  <td>88</td>
                                  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>

                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="box-button ">
                      <div class="row">
                          <a class="waves-effect waves-light btn grey darken-3" href="{{url('/dashboard#admin-reports')}}"><i class="material-icons right">dashboard</i>Back</a>
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
