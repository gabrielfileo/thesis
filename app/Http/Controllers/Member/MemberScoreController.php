<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MemberScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $photoshop= DB::table('score')
            ->join('answer', 'score.answer_id', '=','answer.id')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','course.id', '=','exam.course_id' )
            ->select('score.*', 'exam.topics_id as topics_id', 'course.name as course_name')
            ->where('score.user_id' ,'=',$user_id)
            ->where('exam.topics_id','=',1)->get();
        $illustrator= DB::table('score')
            ->join('answer', 'score.answer_id', '=','answer.id')
            ->join('exam', 'answer.exam_id', '=', 'exam.id')
            ->join('course','course.id', '=','exam.course_id' )
            ->select('score.*', 'exam.topics_id as topics_id', 'course.name as course_name')
            ->where('score.user_id' ,'=',$user_id)
            ->where('exam.topics_id','=',2)->get();
       return view('users.member.scorelist-view')->with (array(
           'score_psd'=>$photoshop,
           'score_ills'=>$illustrator
       ));;
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
