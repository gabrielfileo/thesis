<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Exam;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('users/Member/examlist-view');
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
