@extends('layouts.app')
@section('title','View Course List')
@section('content')

      <div id="content">

          <div class="box-course-content">
              <div class="box-title">
                  <h2>{{$topics_id->name}}</h2>
              </div>
              <div class="box-content clearfix">
                @foreach ($courses as $key => $course)
                  <div class="box2">
                      <div class="box-title">
                          <h3>{{$course->name}}</h3>
                      </div>
                      <div class="box-content" style="height: 135px;">
                          <p style="word-wrap: break-word;">{{$course->description}}</p>
                      </div>
                      <div class="box-button">
                          <a class="waves-effect waves-light btn red darken-4" style="width: 100%;" href="{{url('/topics/'.$course->topics_id.'/course/'.$course->id)}}">ENTER COURSE</a>
                      </div>
                  </div>
                @endforeach
              </div>
              <ul class="pagination">
                {{$courses->links()}}
              </ul>
              <div class="box-button">
                  <a class="waves-effect waves-light btn grey darken-3" style="width: 140px; border-radius:5px;" href="{{url('topics/')}}"><i class="material-icons left" >dashboard</i>BACK</a>
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
