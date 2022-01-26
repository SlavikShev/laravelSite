<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix'=> 'admin', 'namespace' => 'Admin'],function () {
    // todo переименовать в postcategories
    Route::resource('categories/posts','PostCategoryController')
        ->names('admin.categories.posts');
    Route::resource('posts', 'PostController')
        ->names('admin.posts');
});
