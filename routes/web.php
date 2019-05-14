<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/send', 'SendEmailController@store');


Route::get('/booking', function () {
    return view('cliend');
});
Route::resource('/booking', 'PhotoController');


Route::get('/job', 'JobController@index');
Route::post('/job', 'JobController@store');



Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/admin ', function() {
        $posts['posts'] = App\Post::orderBy('created_at','desc')->paginate(8);
         return view('/admin', $posts);
    });

    Route::get('/send', function() {
        $sends['sends'] = App\Send::orderBy('created_at','desc')->paginate(8);
         return view('/send', $sends);

    });

    Route::get('/jobs', function() {
        $jobs['jobs'] = App\Job::orderBy('created_at','desc')->paginate(8);
         return view('/jobs', $jobs);

    });



    Route::get('old','PhotoController@old');
    Route::get('wait','PhotoController@wait');
    route::post('posts/{postId}/accept','PhotoController@accept')->name('accept');
    route::post('posts/{postId}/waiting','PhotoController@waiting')->name('waiting');
  });



