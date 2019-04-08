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

Route::resource('/', 'PhotoController');
route::post('posts/{postId}/accept','PhotoController@accept')->name('accept');

Route::get('old','PhotoController@old');


Auth::routes();


Route::group(['middleware' => ['web','auth']], function(){

    Route::get('/home', function() {
        $posts['posts'] = App\Post::orderBy('created_at','desc')->paginate(8);
         return view('/home', $posts);

    });
  });
