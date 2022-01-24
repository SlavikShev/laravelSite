<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix'=> 'admin', 'namespace' => 'Admin'],function () {
    Route::resource('categories/posts','PostCategoryController')
    ->names('admin.categories.posts');
});
