<?php

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

Route::get('admin/index', 'AdminController@index');

Route::get('admin/control-admin/list', 'AdminController@listAdmin');
Route::get('admin/control-admin/create', 'AdminController@createAdmin');
Route::get('admin/control-admin/edit', 'AdminController@editAdmin');

Route::get('admin/post/create', 'PostController@create');
Route::get('admin/post/list', 'PostController@list');
Route::get('admin/post/edit', 'PostController@getEdit');

Route::get('admin/member/list', 'MemberController@listMem');

Route::get('admin/category/list', 'CategoryController@listCate');
Route::get('admin/category/create', 'CategoryController@createCate');
Route::get('admin/category/edit', 'CategoryController@editCate');

Route::get('admin/feedback/list', 'FeedbackController@listFeedback');

Route::get('admin/comment/list', 'CommentController@listCmt');

Route::get('admin/userpost/list', 'UserPostController@listUPost');