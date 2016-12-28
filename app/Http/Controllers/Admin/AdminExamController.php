<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('users/Admin/exam-view');
    }

    public function review()
    {
        return view('users/Admin/exam-result-review');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('id','asc')->get();
        return view('users/Admin/exam-add')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $entity = new Exam();
      $entity->topics_id =$request->input("topics_id");
      $entity->course_id =$request->input("course_id");
      $entity->description =$request->input("exam_desc");

      $photo       = $request->file('photo_exam');
      $photoName   = $file->getClientOriginalName();
      $request->file('photo_exam')->move("photos/", $photoName);
      $entity->photo_path = $photoName;

      $file       = $request->file('file_exam');
      $fileName   = $file->getClientOriginalName();
      $request->file('file_exam')->move("files/", $fileName);
      $entity->file_path = $fileName;

      $entity->save();
      $request->session()->flash('status', 'New data submitted successfully!');
      return view('users/Admin/exam-add');
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
    public function edit()
    {
          return view('users/Admin/exam-update');
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
