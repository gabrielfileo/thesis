@extends('layouts.app')
@section('title','View Trainee Member')
@section('content')
    <div id="content">

        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view">
                    <div class="box-title ">
                        <h3>View Trainee Member</h3>
                    </div>
                    <div class="box-content ">
                        <table class="responsive-table centered striped">
                            <thead>
                                <tr>
                                    <th data-field="username"  style="width:200px;">NIK</th>
                                    <th data-field="full_name" style="width:250px;">Member Name</th>
                                    <th data-field="Join"  style="width:150px;">Join Date</th>
                                    <th data-field="del">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($trainees as $trainee)
                                <tr>
                                    <td>{{$trainee->username}}</td>
                                    <td>{{$trainee->name}}</td>
                                    <td>{{$trainee->join_date}}</td>
                                    <td>
                                      <button data-target="delete{{$trainee->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                      <div id="delete{{$trainee->id}}" class="modal" style="top: 40%;">
                                        <div class="modal-content" >
                                          <h2>Delete "{{$trainee->name}}"</h2>
                                          <p>Are you sure?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <a class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                          {{ Form::open(['method' => 'DELETE','route' => ['trainee.destroy', $trainee->id],'style'=>'display:inline']) }}
                                          {{ Form::submit('Yes', ['class' => 'btn btn-flat']) }}
                                          {{ Form::close() }}
                                        </div>
                                      </div>
                                    </td>
                                </tr>
                            @endforeach

                               {{-- <tr>
                                    <td>Kevin Witomo</td>
                                    <td>25/08/2015</td>
                                    <td>83</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>
                                <tr>
                                    <td>Kevin Renata</td>
                                    <td>25/08/2015</td>
                                    <td>88</td>
                                    <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">delete</i></a></td>
                                </tr>--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn red darken-4" href="{{url('/dashboard#admin-user')}}"><i class="material-icons left">dashboard</i>Back</a>
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
