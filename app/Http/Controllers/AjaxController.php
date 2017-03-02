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
        return json_encode($exams);
    }

    public function fetchExamAnswerBasedOnID(Request $request)
    {
        $topics_id = $request->input('id');
        $user_id = $request->input('user');
        $answers = DB::table('answer')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','exam.course_id', '=', 'course.id')
            ->select('answer.*', 'course.name')
            ->where('course.topics_id', '=', $topics_id)
            ->where('answer.user_id', '=', $user_id)
            ->orderBy('course.id','asc')->get();
        return json_encode($answers);
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
