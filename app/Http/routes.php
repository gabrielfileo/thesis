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

    Route::resource('course','Admin\AdminCourseController');
    Route::get('/manage/course', 'Admin\AdminCourseController@index');
    Route::get('/manage/course/add', 'Admin\AdminCourseController@create');
    Route::post('/manage/course/add/save', 'Admin\AdminCourseController@store');
    Route::get('/manage/course/edit/{id}', 'Admin\AdminCourseController@edit');
    Route::post('//manage/course/edit/{id}/update', 'Admin\AdminCourseController@update');
    Route::delete('/manage/course/delete/{id}','Admin\AdminCourseController@destroy');

    Route::get('/manage/exam', 'Admin\AdminExamController@index');
    Route::get('/manage/exam/add', 'Admin\AdminExamController@create');
    Route::post('/manage/exam/add/save', 'Admin\AdminExamController@store');

    Route::get('/manage/exam/review', 'Admin\AdminExamController@review');
    Route::get('/manage/exam/edit/{id}', 'Admin\AdminExamController@edit');
    Route::post('/manage/exam/edit/{id}/update', 'Admin\AdminExamController@update');
    Route::delete('/manage/exam/delete/{id}','Admin\AdminExamController@destroy');

    Route::get('/manage/score', 'Admin\AdminScoreController@index');
    Route::get('/manage/score/add', 'Admin\AdminScoreController@create');
    Route::post('/manage/score/save', 'Admin\AdminScoreController@store');
    Route::get('/manage/score/update', 'Admin\AdminScoreController@update1');


    Route::get('/manage/trainee', 'Admin\AdminTraineeController@index');
    Route::get('/manage/trainee/add', 'Admin\AdminTraineeController@create');
    Route::post('/manage/trainee/add/save', 'Admin\AdminTraineeController@store');
    Route::get('/manage/trainee/edit', 'Admin\AdminTraineeController@edit');
    Route::post('/manage/trainee/edit/save', 'Admin\AdminTraineeController@update');

    Route::get('/topics', 'Member\MemberTopicsController@index');
    Route::get('/topics/{id}', 'Member\MemberCourseController@index');
    Route::get('/topics/{id1}/course/{id2}', 'Member\MemberCourseController@show');
    Route::get('/topics/{id1}/course/{id2}/exam', 'Member\MemberExamController@show');
    Route::get('/download_exam/{id}', 'Member\MemberExamController@download');

    Route::get('/exam/view', 'Member\MemberExamController@index');
    Route::get('/exam/upload', 'Member\MemberExamController@upload');
    Route::get('/score', 'Member\MemberScoreController@index');


});

Route::group(['prefix' => 'ajax'], function () {
    Route::post('courses', array('as' => 'ajaxCourseList', 'uses' => 'AjaxController@fetchCourseBasedOnID'));
    Route::post('users', array('as' => 'ajaxUserList', 'uses' => 'AjaxController@fetchUser'));
    Route::post('exams', array('as' => 'ajaxExamList', 'uses' => 'AjaxController@fetchExamBasedOnID'));
});
