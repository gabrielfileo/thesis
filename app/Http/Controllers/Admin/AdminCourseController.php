<?php

namespace App\Http\Controllers\admin;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','asc')->get();
        return view('users.Admin.course-view')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/Admin/course-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entity = new Course();
        $entity->name = $request->input("course_name");
        $entity->description = $request->input("course_desc");
        $entity->topics_id =$request->input("topics_id");
       // $this->validate($request,['file_course'=>'required|video|mimes:mp4|max:10240']);
        //validate video masih error
        $file       = $request->file('file_course');
        $fileName   = md5($file->getClientOriginalName() . microtime()) . '.mp4';
        $request->file('file_course')->move("videos/", $fileName);
        $entity->video_path = $fileName;

        $entity->save();
        $request->session()->flash('status', 'New data submitted successfully!');
        return view('users/Admin/course-add');
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
      $course = Course::where('id',$id)->first();
      return view('users.Admin.course-update')->with('value', $course);


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
        $entity = Course::where('id', $id)->first();
        $entity->name = $request->input('course_name');
        $entity->description = $request->input('course_desc');
        $file       = $request->file('file_course');
        $fileName   = $file->getClientOriginalName();
        $request->file('file_course')->move("videos/", $fileName);
        $entity->video_path = $fileName;

        $entity->save();
        $request->session()->flash('success', $entity->name.' edited successfully!');
        return redirect()->action('Admin\AdminCourseController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Course::find($id)->delete();
        return redirect()->route('course.index')
                  ->with('success','Course deleted successfully');
    }
}
