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

Route::get('/course/add', 'admin\AddCourseController@index');

Route::get('/course/view', function () {
  return view('users/admin/course-view');
});

Route::get('/exam/add', function () {
  return view('users/admin/exam-add');
});

Route::get('/exam/review', function () {
  return view('users/admin/exam-review');
});
