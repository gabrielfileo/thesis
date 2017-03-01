<?php

namespace App\Http\Controllers;

use DB;
use App\Course;
use App\User;
use App\Exam;
use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
    public function fetchCourseBasedOnID(Request $request)
    {
        $topics_id = $request->input('id');
        $courses = Course::where('topics_id',$topics_id)->orderBy('id','asc')->get();
        return json_encode($courses);
    }

    public function fetchUser(Request $request)
    {
        $user_id = $request->input('id');
        $users = User::where('role','trainee')->where('id',$user_id)->first();
        return json_encode($users);
    }

    public function fetchExamBasedOnID(Request $request)
    {
        $topics_id = $request->input('id');

        $exams = DB::table('exam')
            ->join('course', 'exam.course_id', '=', 'course.id')
            ->select('exam.*', 'course.name')->where('exam.topics_id', '=', $topics_id)->orderBy('exam.id','asc')->get();
        ;

       /* $exams = DB::table('exam')
            ->join('course', 'exam.course_id', '=', 'course.id')
            ->join('topics', 'course.topics_id', '=', 'topics.id')
            ->select('exam.*', 'course.name as courseName', 'topics.name as topicsName')->where('exam.topics_id', '=', $topics_id)->orderBy('exam.id','asc')->get();
        ;
       */
       //Exam::where('topics_id',$topics_id)->orderBy('id','asc')->get();
        //$exams_course = $exams->course->get();
        return json_encode($exams);
    }

    public function triggerAskBtn(Request $request)
    {
        $user_id = $request->input('id');
        $user = User::where('id',$user_id)->first();
        $user->flag = 1;
        $user->save();
        return json_encode("success");
    }


    public function triggerDismissBtn(Request $request)
    {
        $user = User::where('role','trainee')->update(['flag' => 0]);
        return json_encode("success");
    }

}
