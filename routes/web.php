<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//////show all posts
Route::get('/posts','PostController@index')->name('posts.index');

///////////go to creation form
Route::get('/posts/create','PostController@create')->name('posts.create');
//////////submit creation form
Route::post('/posts','PostController@store')->name('posts.store');


////////////delete post
Route::delete('/posts/{post}', 'PostController@destroy') -> name('posts.destroy');

/////////////view post details
Route::get('/posts/{post}','PostController@show')->name('posts.show');