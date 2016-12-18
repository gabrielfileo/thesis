<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminTraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'trainee')->orderBy('name', 'asc')->get();
        return view('users.Admin.trainee-view')->with('trainees', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/Admin/trainee-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entity = new User();
        $entity->username = $request->input('username');
        $entity->name = $request->input('fullName');
        $entity->password = Hash::make($request->input('password'));
        $date = strtotime($request->input('join_date'));
        $newformat = date('Y-m-d',$date);
        $entity->join_date = $newformat;
        $entity->role = "trainee";
        $entity->save();
        $request->session()->flash('status', 'New data submitted successfully!');
        return view('users/Admin/trainee-add');

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

     public function testedit()
     {

         return view('users/Admin/trainee-update');
     }


    public function edit($id)
    {
        return view('users/Admin/trainee-edit');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('trainee.index')
                     ->with('success','Item deleted successfully');
    }
}
