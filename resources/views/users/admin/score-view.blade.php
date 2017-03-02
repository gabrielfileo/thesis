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
                        <div class="box-succeed">
                            <p style="color:white; text-align:center;">
                                @if(Session::has("warning"))
                                    {{Session::get("warning")}}
                                @endif
                                @if(Session::has("success"))
                                    {{Session::get("success")}}
                                @endif
                            </p>
                        </div>
                      <div class="row">
                          <div class="col s12">
                              <ul class="tabs">
                                  <li class="tab col s6"><a class="active" href="#score-psd">Photoshop</a>
                                  </li>
                                  <li class="tab col s6"><a href="#score-ills">Ilustrator</a>
                                  </li>
                              </ul>
                          </div>
                      </div>


                        <div id="score-psd" class="col s12">
                            <br>
                            <table class="responsive-table centered striped">
                                <thead>
                                    <tr>
                                        <th data-field="full_name" style="width:150px;">Member Name</th>
                                        <th data-field="course"  style="width:150px;">Course </th>
                                        <th data-field="score"  style="width:150px;">Score</th>
                                        <th data-field="edit">Edit</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($photoshop as $score)
                                    <tr>
                                        <td>{{$score->user_name}}</td>
                                        <td>{{$score->course_name}}</td>
                                        <td>{{$score->score}}</td>
                                        <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/score/edit/'.$score->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        </div>

                        <div id="score-ills" class="col s12">
                            <br>
                            <table class="responsive-table centered striped">
                                <thead>
                                <tr>
                                    <th data-field="full_name" style="width:150px;">Member Name</th>
                                    <th data-field="course"  style="width:150px;">Course Name</th>
                                    <th data-field="score"  style="width:150px;">Score</th>
                                    <th data-field="edit">Edit</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($illustrator as $score)
                                    <tr>
                                        <td>{{$score->user_name}}</td>
                                        <td>{{$score->course_name}}</td>
                                        <td>{{$score->score}}</td>
                                        <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/score/edit/'.$score->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="box-button ">
                            <div class="row">
                                <a class="waves-effect waves-light btn red darken-4" href="{{url('/dashboard#admin-reports')}}"><i class="material-icons left">dashboard</i>Back</a>
                            </div>
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
          $('select').material_select();
          Materialize.updateTextFields();
          $('.modal-trigger').leanModal();
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
