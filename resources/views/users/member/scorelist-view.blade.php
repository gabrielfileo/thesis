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
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6"><a class="active" href="#score-psd">Photoshop</a>
                                </li>
                                <li class="tab col s6"><a href="#score-ills">Illustrator</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="score-psd" class="col s12">
                      <table class="responsive-table centered striped">
                          <thead>
                              <tr>
                                  <th data-field="course"  style="width:300px;"> Course Name</th>
                                  <th data-field="score"  style="width:150px;">Score</th>
                                  <th data-field="comms" style="width:500px;">Comments</th>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                              @foreach($score_psd as $score)
                                  <tr>
                                      <td>{{$score->course_name}}</td>
                                      <td>{{$score->score}}</td>
                                      <td>{{$score->comment}}</td>
                                      </tr>
                                  @endforeach
                              </tr>
                          </tbody>
                      </table>
                    </div>

                    <div id="score-ills" class="col s12">
                      <table class="responsive-table centered striped">
                          <thead>
                              <tr>
                                  <th data-field="course"  style="width:300px;"> Course Name</th>
                                  <th data-field="score"  style="width:150px;">Score</th>
                                  <th data-field="comms" style="width:500px;">Comments</th>
                              </tr>
                          </thead>

                          <tbody>
                          <tr>
                            @foreach($score_ills as $score)
                              <tr>
                                  <td>{{$score->course_name}}</td>
                                  <td>{{$score->score}}</td>
                                  <td>{{$score->comment}}</td>
                              </tr>
                              @endforeach
                              </tr>
                          </tbody>
                      </table>
                    </div>
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
