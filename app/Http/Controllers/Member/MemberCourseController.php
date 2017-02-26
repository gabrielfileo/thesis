<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Course;
use App\Exam;
use App\Topics;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MemberCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $courses = Course::where('topics_id',$id)->orderBy('id','asc')->paginate(6);
        $topics_id = Topics::where('id',$id)->first();
        return view('users.Member.courselist-view')->with(array(
          'courses' => $courses,
          'topics_id' =>$topics_id
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id1, $id2)
    {
      $previous = Course::where('topics_id',$id1)->where('id', '<', $id2)->max('id');
      $next = Course::where('topics_id',$id1)->where('id', '>', $id2)->min('id');
      $exam = Exam::where('topics_id',$id1)->where('course_id',$id2)->first();
      $course = Course::where('topics_id',$id1)->where('id',$id2)->first();
      return view('users/Member/course-view')->with('value', $course)->with('previous', $previous)->with('next',$next)->with('exam',$exam);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
