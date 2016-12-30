<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
    public function fetchCourseBasedOnID(Request $request)
    {
        $topics_id = $request->input('id');
        $courses = Course::where('topics_id',$topics_id)->orderBy('name','asc')->get();
        return json_encode($courses);
    }

    public function fetchUser(Request $request)
    {
        $user_id = $request->input('id');
        $users = User::where('role','trainee')->where('id',$user_id)->first();
        return json_encode($users);
    }
}
