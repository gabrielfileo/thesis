<?php

namespace App\Http\Controllers\admin;

use App\Exam;
use DB;
use App\User;
use App\Score;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psd_scores = DB::table('score')
            ->join('answer', 'answer.id','=', 'score.answer_id')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','exam.course_id', '=', 'course.id')
            ->join('users', 'users.id', '=', 'answer.user_id')
            ->select('score.*','course.name as course_name', 'users.name as user_name')
            ->where('exam.topics_id','=',1)->get();
        $ills_scores = DB::table('score')
            ->join('answer', 'answer.id','=', 'score.answer_id')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','exam.course_id', '=', 'course.id')
            ->join('users', 'users.id', '=', 'answer.user_id')
            ->select('score.*','course.name as course_name', 'users.name as user_name')
        ->where('exam.topics_id','=',2)->get();
        return view('users/Admin/score-view')->with (array(
            'photoshop'=>$psd_scores,
            'illustrator'=>$ills_scores));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role', 'trainee')->orderBy('name','asc')->get();
        return view('users.admin.score-add')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entity = new Score();
        $entity->answer_id = $request->input("answer_id");
        $entity->user_id = $request->input("trainee_id");
        $entity->score = (int)$request->input("answer_score");
        $entity->comment = $request->input("score_comment");

        $entity->save();
        $request->session()->flash('status', 'New data submitted successfully!');
        return redirect('/manage/score/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $score = DB::table('score')
            ->join('answer', 'answer.id','=', 'score.answer_id')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','exam.course_id', '=', 'course.id')
            ->join('users', 'users.id', '=', 'answer.user_id')
            ->select('score.*','answer.id as answer_id','course.name as course_name', 'course.topics_id', 'users.id as user_id', 'users.name as user_name')
            ->where('score.id','=',$id)->first();
        return view('users.Admin.score-update')->with('value',$score);
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
        $entity = Score::where('id', $id)->first();
        $entity->score =(int)$request->input('answer_score');
        $entity->comment = $request->input('score_comment');
        $entity->save();
        $request->session()->flash('success', 'Score edited successfully!');
        return redirect('/manage/score/edit/'.$id);

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
