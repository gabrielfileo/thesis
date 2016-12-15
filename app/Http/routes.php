<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if  (Auth::guard()->guest()) {
      return view('auth/login');
    }
    else {
      return redirect('/dashboard');
    }
});

Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('trainee','Admin\AdminTraineeController');
    Route::get('/dashboard', 'DashboardController@index');

    Route::post('/account/save', 'AccountController@editPassword');

    Route::get('/account', 'AccountController@index');

    Route::get('/manage/course', 'Admin\AdminCourseController@index');
    Route::get('/manage/course/add', 'Admin\AdminCourseController@create');
    Route::post('/manage/course/add/save', 'Admin\AdminCourseController@store');
    Route::get('/manage/course/edit', 'Admin\AdminCourseController@edit');

    Route::get('/manage/exam/add', 'Admin\AdminExamController@create');
    Route::get('/manage/exam/review', 'Admin\AdminExamController@review');

    Route::get('/manage/score', 'Admin\AdminScoreController@index');
    Route::get('/manage/score/add', 'Admin\AdminScoreController@create');

    Route::get('/manage/trainee', 'Admin\AdminTraineeController@index');

    Route::get('/manage/trainee/add', 'Admin\AdminTraineeController@create');
    Route::post('/manage/trainee/add/save', 'Admin\AdminTraineeController@store');



    Route::get('/manage/trainee/edit', 'Admin\AdminTraineeController@testedit');
    Route::post('/manage/trainee/edit/save', 'Admin\AdminTraineeController@update');
});
