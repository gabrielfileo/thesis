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
                    @if(Session::has("success")) {{--Mohon dipercantik lagi tampilan error message ini--}}
                        {{Session::get("success")}}
                    @endif
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
                              @foreach($courses as $course)
                                  <tr>

                                      <td>{{$course->name}}</td>
                                      <td>{{$course->created_at}}</td>
                                      <td>{{$course->description}}</td>
                                      <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">mode_edit</i></a></td>
                                      <td>

                                        <button data-target="delete{{$course->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                        <div id="delete{{$course->id}}" class="modal" style="width: 20%" >
                                          <div class="modal-content" >
                                            <h2>Delete Confirmation</h2>
                                            <p>Delete {{$course->name}}</p>
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

                              {{--  <tr>
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
                                </tr>--}}
                            </tbody>
                        </table>
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
