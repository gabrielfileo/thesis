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
                                   <th data-field="course_name"  style="width:300px;">Course Name</th>
                                   <th data-field="name"  style="width:300px;">Name</th>
                                   <th data-field="submit_time"  style="width:250px;">Submit Time</th>
                                   <th data-field="del">Delete</th>
                                   <th data-field="download">Download</th>
                               </tr>
                           </thead>

                                    <tbody>

                                    @foreach($photoshop as $answer)
                                        <tr>
                                        <td>{{$answer->course_name}}</td>
                                        <td>{{$answer->user_name}}</td>
                                        <td>{{$answer->created_at}}</td>
                                        <td>
                                            <button data-target="delete{{$answer->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                            <div id="delete{{$answer->id}}" class="modal" style="width: 20%" >
                                                <div class="modal-content" >
                                                    <h2>Delete "{{$answer->course_name}}"</h2>
                                                    <p>Are you sure?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                    {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $course->id],'style'=>'display:inline'])) !!} --}}
                                                    {{ Form::open(array('url' => '/manage/exam/review/delete/'.$answer->id,'style'=>'display:inline')) }}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                    {{ Form::close() }}
                                                </div>
                                            </div>
                                        </td>
                                        <td><a class="waves-effect waves-red darken-4 btn-flat" href="{{asset('/storage/files/'.$answer->file_path)}}"><i class="material-icons">play_for_work</i></a></td>
                                        </tr>
                                    @endforeach
                            </tbody>

                                  </table>
                        </div>

                        <div id="exam-ills" class="col s12">
                            <br>
                                <table class="responsive-table centered striped">
                                  <thead>
                                     <tr>
                                         <th data-field="course_name"  style="width:300px;">Course Name</th>
                                         <th data-field="name"  style="width:300px;">Name</th>
                                         <th data-field="submit_time"  style="width:250px;">Submit Time</th>
                                         <th data-field="del">Delete</th>
                                         <th data-field="download">Download</th>
                                     </tr>
                                  </thead>

                                    <tbody>
                                    @foreach($illustrator as $answer)
                                        <tr>
                                            <td>{{$answer->course_name}}</td>
                                            <td>{{$answer->user_name}}</td>
                                            <td>{{$answer->created_at}}</td>
                                            <td>
                                                <button data-target="delete{{$answer->id}}" class="waves-effect waves-red darken-4 btn-flat modal-trigger"><i class="material-icons">delete</i></button>
                                                <div id="delete{{$answer->id}}" class="modal" style="width: 20%" >
                                                    <div class="modal-content" >
                                                        <h2>Delete "{{$answer->course_name}}"</h2>
                                                        <p>Are you sure?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                                                        {{--  {!! Form::open(array(['method' => 'DELETE','route' => ['course.destroy', $course->id],'style'=>'display:inline'])) !!} --}}
                                                        {{ Form::open(array('url' => '/manage/exam/review/delete/'.$answer->id,'style'=>'display:inline')) }}
                                                        {{ Form::hidden('_method', 'DELETE') }}
                                                        {{ Form::submit('Yes', array('class' => 'btn btn-flat')) }}
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a class="waves-effect waves-red darken-4 btn-flat" href="{{asset('/storage/files/'.$answer->file_path)}}"><i class="material-icons">play_for_work</i></a></td>
                                        </tr>
                                    @endforeach
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
          $('select').material_select();
          Materialize.updateTextFields();
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
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
