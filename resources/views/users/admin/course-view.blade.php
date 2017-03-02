@extends('layouts.app')
@section('title','View Course')
@section('content')
    <div id="content">
      <div id="check-flag">

      </div>
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
                                  <li class="tab col s6"><a class="active" href="#course-psd">Photoshop</a>
                                  </li>
                                  <li class="tab col s6"><a href="#course-ills">Ilustrator</a>
                                  </li>
                              </ul>
                          </div>

                          <div id="course-psd" class="col s12">
                              <br>
                                  <table class="responsive-table centered striped">
                                      <thead>
                                          <tr class="courses">
                                              <th data-field="full_name" style="width:250px; font-size:16px;">Course Name</th>
                                              <th data-field="Join" style="width:250px;font-size:16px;">Upload Date</th>
                                              <th data-field="score" style="width: 400px;font-size:16px;">Description</th>
                                              <th data-field="edit" style="width:100px;font-size:16px;">Edit</th>
                                              <th data-field="del" style="width:100px;font-size:16px;">Delete</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($photoshop as $course)
                                            <tr>

                                                <td>{{$course->name}}</td>
                                                <td>{{$course->created_at}}</td>
                                                <td>{{$course->description}}</td>
                                                <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/course/edit/'.$course->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                                <td>

                                                  <button data-target="delete{{$course->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                                  <div id="delete{{$course->id}}" class="modal" style="width: 20%" >
                                                    <div class="modal-content" >
                                                      <h2>Delete "{{$course->name}}"</h2>
                                                      <p>Are you sure?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <a href="#" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                    {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $course->id],'style'=>'display:inline'])) !!} --}}
                                                      {{ Form::open(array('url' => '/manage/course/delete/'.$course->id,'style'=>'display:inline')) }}
                                                      {{ Form::hidden('_method', 'DELETE') }}
                                                      {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                      {{ Form::close() }}
                                                    </div>
                                                  </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>

                              <div id="course-ills" class="col s12">
                                  <br>
                                      <table class="responsive-table centered striped">
                                          <thead>
                                              <tr class="courses">
                                                  <th data-field="full_name" style="width:250px; font-size:16px;">Course Name</th>
                                                  <th data-field="Join" style="width:250px;font-size:16px;">Upload Date</th>
                                                  <th data-field="score" style="width: 400px;font-size:16px;">Description</th> {{--Baru--}}
                                                  <th data-field="edit" style="width:100px;font-size:16px;">Edit</th>
                                                  <th data-field="del" style="width:100px;font-size:16px;">Delete</th>
                                              </tr>
                                          </thead>

                                          <tbody>
                                            @foreach($illustrator as $course)
                                                <tr>

                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->created_at}}</td>
                                                    <td>{{$course->description}}</td>
                                                    <td><a class="waves-effect waves-teal btn-flat" href="{{url('/manage/course/edit/'.$course->id)}}"><i class="material-icons">mode_edit</i></a></td>
                                                    <td>

                                                      <button data-target="delete{{$course->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                                      <div id="delete{{$course->id}}" class="modal" style="width: 20%" >
                                                        <div class="modal-content" >
                                                          <h2>Delete "{{$course->name}}"</h2>
                                                          <p>Are you sure?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                        {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $course->id],'style'=>'display:inline'])) !!} --}}
                                                          {{ Form::open(array('url' => '/manage/course/delete/'.$course->id,'style'=>'display:inline')) }}
                                                          {{ Form::hidden('_method', 'DELETE') }}
                                                          {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                          {{ Form::close() }}
                                                        </div>
                                                      </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                          </div>
                    <div class="box-button ">
                        <div class="row">
                            <a class="waves-effect waves-light btn grey darken-3" style="width:180px;" href="{{url('/dashboard#admin-course')}}"><i class="material-icons left">dashboard</i>Back</a>
                            <a class="waves-effect waves-light btn red darken-4" style="width:180px;" href="{{url('/manage/course/add')}}"><i class="material-icons left">add</i>Upload</a>
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
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });

    $(document).ready(function() {
      function updateFlag(){
			     $('#check-flag').load('/thesis/resources/views/users/admin/check-flag2.blade.php');
			}
      setInterval( function () {
					updateFlag();
			}, 2000 );
    });



    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
@endsection
