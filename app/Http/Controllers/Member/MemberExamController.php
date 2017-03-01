<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Exam;
use App\Answer;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $photoshop= DB::table('answer')
                    ->join('exam', 'answer.exam_id', '=', 'exam.id')
                    ->join('course','course.id', '=','exam.course_id' )
                    ->select('answer.*', 'exam.description as exam_description', 'exam.file_path as exam_file_path', 'exam.topics_id as topics_id', 'course.name as course_name')
                    ->where('answer.user_id' ,'=',$user_id)
                    ->where('exam.topics_id','=',1)->get();
        $illustrator = DB::table('answer')
                    ->join('exam', 'answer.exam_id', '=', 'exam.id')
                    ->join('course','course.id', '=','exam.course_id' )
                    ->select('answer.*', 'exam.description as exam_description', 'exam.file_path as exam_file_path', 'exam.topics_id as topics_id', 'course.name as course_name')
                    ->where('answer.user_id' ,'=',$user_id)
                    ->where('exam.topics_id','=',2)->get();

         return view('users/Member/examlist-view')->with (array(
                    'photoshop'=>$photoshop,
                    'illustrator'=>$illustrator
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
    public function upload()
    {
          return view('users/Member/exam-upload');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entity = new Answer();
        $entity->exam_id =$request->input("exam_id");
        $entity->user_id = Auth::user()->id;
        $entity->comment =$request->input("answer_comment");
        $answer        = $request->file('file_answer');
        $answerName   = md5($answer->getClientOriginalName() . microtime()) . '.zip';
        $request->file('file_answer')->move("storage/files/", $answerName);
        $entity->file_path = $answerName;

        $entity->save();
        $request->session()->flash('status', 'New data submitted successfully!');
        return view('users/Member/exam-upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id1, $id2)
    {
      $value = Exam::where('topics_id',$id1)->where('course_id',$id2)->first();
      return view('users/Member/exam-view')->with('value', $value);
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

    public function download($id)
    {
        $exam= Exam::where('id',$id)->first;
        $myFile = public_path("/storage/files".$exam->file_path);
        $headers = ['Content-Type: application/octet-stream'];
        $newName = 'exam.rar';

        return response()->download($myFile, $newName, $headers);
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
