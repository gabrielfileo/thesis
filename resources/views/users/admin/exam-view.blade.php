@extends('layouts.app')
@section('title','Add Exam')
@section('content')
    <div id="content">
        <div class="box">
            <div class="box-title">
                <h2>Administrator</h2>
            </div>
            <div class="box-content-material clearfix">
                <div class="box-trainee-view clearfix">
                    <div class="box-title ">
                        <h3>View Exam List</h3>
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
                                      <tr class="exam">
                                          <th data-field="course" style="width:250px; font-size:16px;">Course Name</th>
                                          <th data-field="upload" style="width:250px;font-size:16px;">Upload Date</th>
                                          <th data-field="edit" style="width:100px;font-size:16px;">Edit</th>
                                          <th data-field="del" style="width:100px;font-size:16px;"font-size:16px;>Delete</th>
                                          <th data-field="download" style="width:100px;font-size:16px;"font-size:16px;>Download</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                    @foreach($photoshop as $exam)
                                        <tr>

                                            <td>{{$exam->course->name}}</td>
                                            <td>{{$exam->created_at}}</td>
                                            <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/exam/edit/'.$exam->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                            <td>

                                              <button data-target="delete{{$exam->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                              <div id="delete{{$exam->id}}" class="modal" style="width: 20%" >
                                                <div class="modal-content" >
                                                  <h2>Delete "{{$exam->name}}"</h2>
                                                  <p>Are you sure?</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $exam->id],'style'=>'display:inline'])) !!} --}}
                                                  {{ Form::open(array('url' => '/manage/exam/delete/'.$exam->id,'style'=>'display:inline')) }}
                                                  {{ Form::hidden('_method', 'DELETE') }}
                                                  {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                  {{ Form::close() }}
                                                </div>
                                              </div>
                                              <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                  </tbody>

                                </table>
                      </div>

                      <div id="exam-ills" class="col s12">
                          <br>
                              <table class="responsive-table centered striped">
                                  <thead>
                                      <tr class="exam">
                                          <th data-field="course" style="width:250px; font-size:16px;">Course Name</th>
                                          <th data-field="upload" style="width:250px;font-size:16px;">Upload Date</th>
                                          <th data-field="edit" style="width:100px;font-size:16px;">Edit</th>
                                          <th data-field="del" style="width:100px;font-size:16px;"font-size:16px;>Delete</th>
                                          <th data-field="download" style="width:100px;font-size:16px;"font-size:16px;>Download</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                    @foreach($illustrator as $exam)
                                        <tr>
                                            <td>{{$exam->course->name}}</td>
                                            <td>{{$exam->created_at}}</td>
                                            <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/exam/edit/'.$exam->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                            <td>

                                              <button data-target="delete{{$exam->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                              <div id="delete{{$exam->id}}" class="modal" style="width: 20%" >
                                                <div class="modal-content" >
                                                  <h2>Delete "{{$exam->name}}"</h2>
                                                  <p>Are you sure?</p>
                                                </div>

                                                <div class="modal-footer">
                                                  <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $exam->id],'style'=>'display:inline'])) !!} --}}
                                                  {{ Form::open(array('url' => '/manage/exam/delete/'.$exam->id,'style'=>'display:inline')) }}
                                                  {{ Form::hidden('_method', 'DELETE') }}
                                                  {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                  {{ Form::close() }}
                                                </div>
                                              </div>
                                            </td>
                                            <td><a class="waves-effect waves-red darken-4 btn-flat"><i class="material-icons">play_for_work</i></a></td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>

                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="{{url('/dashboard#admin-exam')}}"><i class="material-icons left">dashboard</i>Back</a>
                            <a class="waves-effect waves-light btn red darken-4" style="width:180px;" href="{{url('/manage/exam/add')}}"><i class="material-icons left">add</i>Upload</a>
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
