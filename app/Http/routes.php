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

Route::get('/dashboard', 'DashboardController@index');

Route::post('/account/save', 'AccountController@editPassword');

Route::get('/account', 'AccountController@index');

Route::get('/manage/course', 'admin\AdminCourseController@index');
Route::get('/manage/course/add', 'admin\AdminCourseController@create');

Route::get('/manage/exam/add', 'admin\AdminExamController@create');
Route::get('/manage/exam/review', 'admin\AdminExamController@review');

Route::get('/manage/score', 'admin\AdminScoreController@index');
Route::get('/manage/score/add', 'admin\AdminScoreController@create');

Route::get('/manage/trainee', 'admin\AdminTraineeController@index');
Route::get('/manage/trainee/add', 'admin\AdminTraineeController@create');
Route::get('/manage/trainee/edit', 'admin\AdminTraineeController@testedit');
