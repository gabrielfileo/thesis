@extends('layouts.app')
@section('title')
  {{'Exam: '.$value->course->name}}
@endsection
@section('content')


  <div id="content">

       <div class="box-course-content">
           <div class="box-title">
               <h2>Adobe Illustrator {{Auth::user()->name}} {{Auth::user()->id}}</h2>
           </div>
           <div class="box-content-material clearfix">
               <div class="box-video clearfix">
                   <div class="box-title">
                       <h3>{{$value->course->name}}</h3>
                   </div>
                   <div class="box-content">
                       <div class="valign-wrapper">
                         <p class="valign" style="text-align: center;"><img class="materialboxed" width="300" src="{{url('storage/photos/'.$value->image_path)}}"></p>
                       </div>
                       <div class="divider vivid"></div>
                       <p>{{$value->description}}</p>
                   </div>
                   <div class="box-button">
                      <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;" href="{{url('topics/'.$value->topics_id.'/course/'.$value->course_id)}}"><i class="material-icons left" >dashboard</i>BACK</a>
                       <a id="ask_btn" class="waves-effect waves-light btn red darken-4" style="width: 150px; border-radius:5px;;"><i class="material-icons left">person_pin</i>ASK</a>
                       {{--{{ Form::open(['method' => 'GET','route' => ['/download_exam/'.$value->id],'style'=>'display:inline']) }}--}}
                       {{--<a><button class="waves-effect waves-light btn teal" style="width: 200px; border-radius:5px;"  type="submit"><i class="material-icons left">send</i>Download</button></a>--}}
                        <a class="waves-effect waves-light btn teal" style="width: 200px; border-radius:5px;;" href="{{asset('/storage/files/'.$value->file_path)}}"><i class="material-icons left">play_for_work</i>Download</a>
                        {{--{{ Form::submit('Yes', ['class' => 'btn btn-flat']) }}--}}
                       {{--{{ Form::close() }}--}}
                       <a href="{{url('/exam/upload')}}" class="waves-effect waves-light btn red darken-4" style="width: 250px; border-radius:5px;;"><i class="material-icons left">send</i>Upload Result</a>
                   </div>
               </div>
               <?php $re =Auth::user()->name; ?>
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
    $(document).ready(function() {
        var aa = "{{Auth::user()->id}}";
        $("#ask_btn").on('click', function(){
            alert("Success");
            $.ajax({
                method: "POST",
                url: "{{route('ajaxAskBtn')}}",
                data:{
                    id : aa,
                }
            });

        })
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
