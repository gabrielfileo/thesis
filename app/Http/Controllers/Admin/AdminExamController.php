<?php

namespace App\Http\Controllers\admin;

use App\Exam;
use App\Course;
use Illuminate\Http\Request;
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
        $photoshop = Exam::where('topics_id',1)->orderBy('id','asc')->get();
        $illustrator = Exam::where('topics_id',2)->orderBy('id','asc')->get();
        return view('users/Admin/exam-view')->with(array(
            'photoshop' => $photoshop,
            'illustrator' => $illustrator
        ));
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
      $photo        = $request->file('photo_exam');
      $photoName   = md5($photo->getClientOriginalName() . microtime()) . '.jpg';
      $request->file('photo_exam')->move("storage/photos/", $photoName);
      $entity->image_path = $photoName;

      $file       = $request->file('file_exam');
      $fileName   = md5($file->getClientOriginalName() . microtime()) . '.zip';
      $request->file('file_exam')->move("storage/files/", $fileName);
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
    public function edit($id)
    {
          $exam = Exam::where('id', $id)->first();
          return view('users/Admin/exam-update')->with('value', $exam);
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
      $entity = Exam::where('id', $id)->first();
      $entity->description = $request->input('exam_desc');
      $file       = $request->file('file_exam');
      $fileName   = md5($file->getClientOriginalName() . microtime()) . '.zip';
      $request->file('file_exam')->move("storage/files/", $fileName);
      $entity->file_path = $fileName;
      $entity->save();
      $request->session()->flash('success', $entity->course->name.' edited successfully!');
      return redirect()->action('Admin\AdminExamController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Exam::find($id)->delete();
      return redirect()->action('Admin\AdminExamController@index')
                ->with('success','Course deleted successfully');
    }
}
