<?php

use Illuminate\Support\Facades\Route;


// Frontend Route

Route::get('/','PageController@index');
Route::get('/userlogin','PageController@login');
Route::get('/userregister','PageController@register');

Route::get('/book/{id}/view','PageController@show');
Route::get('/book/{id}/comment','PageController@create');
Route::get('/book/category/{id}','PageController@category');
//=====================================================



// Backend Route


Route::get('admin/dashboard', function () {
    return view('Backend/admin/layouts/master');
})->middleware('UserMiddleware');

// Post Route
Route::group(['prefix' =>'admin/dashboard','middleware'=>'UserMiddleware'],function(){
    Route::get('/post','Admin\PostController@index');
    Route::get('/post/create','Admin\PostController@create');
    Route::get('/post/trash','Admin\PostController@trash');
    Route::post('/post/create','Admin\PostController@store');
    Route::get('/post/{id}','Admin\PostController@show');
    Route::get('/post/{id}/edit','Admin\PostController@edit');
    Route::post('/post/{id}/edit','Admin\PostController@update');
    Route::get('/post/{id}/delete','Admin\PostController@destroy');
    Route::get('/post/{id}/restore','Admin\PostController@restore');
    Route::get('/post/trash/{id}/delete','Admin\PostController@fdelete');
});

// Category Route
Route::group(['prefix' =>'admin/dashboard','middleware'=>'UserMiddleware'],function(){
    Route::get('/category','Admin\CategoryController@index');
    Route::get('/category/create','Admin\CategoryController@create');
    Route::post('/category/create','Admin\CategoryController@store');
    Route::get('/category/{id}/edit','Admin\CategoryController@edit');
    Route::post('/category/{id}/edit','Admin\CategoryController@update');
    Route::get('/category/{id}/delete','Admin\CategoryController@destroy');
});

// Author Route
Route::group(['prefix'=>'admin/dashboard','middleware'=>'UserMiddleware'],function(){
    Route::get('/author','Admin\AuthorController@index');
    Route::get('/author/create','Admin\AuthorController@create');
    Route::post('/author/create','Admin\AuthorController@store');
    Route::get('/author/{id}/edit','Admin\AuthorController@edit');
    Route::post('/author/{id}/edit','Admin\AuthorController@update');
    Route::get('/author/{id}/delete','Admin\AuthorController@destroy');
});

// User Route
Route::group(['prefix'=>'admin/dashboard','middleware'=>'UserMiddleware'],function(){
    Route::get('/user','Admin\UserController@index');
    Route::get('/user/create','Admin\UserController@create');
    Route::post('/user/create','Admin\UserController@store');
    Route::get('/user/{id}/edit','Admin\UserController@edit');
    Route::post('/user/{id}/edit','Admin\UserController@update');
    Route::get('/user/{id}/delete','Admin\UserController@destroy');
});

Route::group(['prefix'=>'admin/dashboard','middleware'=>'UserMiddleware'],function(){
    Route::get('/comment','Admin\CommentController@index');
    Route::get('/comment/{id}/hide','Admin\CommentController@hide');
    Route::get('/comment/{id}/show','Admin\CommentController@show');
});


Auth::routes();


