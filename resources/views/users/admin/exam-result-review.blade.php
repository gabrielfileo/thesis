@extends('layouts.app')
@section('title','View Exam Result')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view clearfix">
                    <div class="box-title ">
                        <h3>Review Exam Result</h3>
                    </div>
                    <div class="box-content ">
                      <div class="row">
                          <div class="col s12">
                              <ul class="tabs">
                                  <li class="tab col s6"><a class="active" href="#exam-psd">Photoshop</a>
                                  </li>
                                  <li class="tab col s6"><a href="#exam-ills">Ilustrator</a>
                                  </li>
                              </ul>
                          </div>
                        </div>

                        <div id="exam-psd" class="col s12">
                            <br>
                                <table class="responsive-table centered striped">
                                  <thead>
                               <tr>
                                   <th data-field="name"  style="width:300px;">Name</th>
                                   <th data-field="submit_time"  style="width:250px;">Submit Time</th>
                                   <th data-field="del">Delete</th>
                                   <th data-field="download">Download</th>
                               </tr>
                           </thead>

                                    <tbody>
                                <tr>
                                    <td>Angelica</td>
                                    <td>25/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>

                                </tr>
                                <tr>
                                    <td>Gatot</td>
                                    <td>27/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                </tr>
                                <tr>
                                    <td>Togar Pardamean Sitorus</td>
                                    <td>29/08/2016</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                </tr>
                            </tbody>

                                  </table>
                        </div>

                        <div id="exam-ills" class="col s12">
                            <br>
                                <table class="responsive-table centered striped">
                                  <thead>
                                     <tr>
                                         <th data-field="name"  style="width:300px;">Name</th>
                                         <th data-field="submit_time"  style="width:250px;">Submit Time</th>
                                         <th data-field="del">Delete</th>
                                         <th data-field="download">Download</th>
                                     </tr>
                                  </thead>

                                    <tbody>
                                  <tr>
                                      <td>Angelica</td>
                                      <td>25/08/2016</td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>

                                  </tr>
                                  <tr>
                                      <td>Gatot</td>
                                      <td>27/08/2016</td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                  </tr>
                                  <tr>
                                      <td>Togar Pardamean Sitorus</td>
                                      <td>29/08/2016</td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                      <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                  </tr>
                              </tbody>
                                  </table>
                        </div>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="{{url('/dashboard#admin-exam')}}"><i class="material-icons left">dashboard</i>Back</a>
                          
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
