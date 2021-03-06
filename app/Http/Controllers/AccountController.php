<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account');
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

    public function editPassword(Request $request)
    {
        $entity = User::find(Auth::user()->id); //find the user data according to id
        if (Hash::check($request->input("old_password"), $entity->password ) != true){
            $request->session()->flash('error', 'Incorrect old password!');
            return redirect('/account');
        }
        elseif ($request->input("cpassword") != $request->input("new_password")){
             $request->session()->flash('error', 'New password is different!');
             return redirect('/account');
        }
        else{
        $entity->name = $request->input('fullName');
        if($request->input("new_password")!=NULL && $request->input("cpassword")!=NULL){
          $entity->password = Hash::make($request->input('new_password')); //validate  not to change password if new_password and cpassword is empty
        }
        $entity->save();
        Auth::logout();
        return redirect('/');}
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
