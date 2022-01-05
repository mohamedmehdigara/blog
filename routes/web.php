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

Route::get('index/{id}/{name}', function ($id, $name) {
    return 'User ID:'.$id." Name ".$name;
})->whereNumber('id')->whereAlpha('name');

Route::prefix('admin/posts')->name('admin.posts')->group(function(){
    Route::view('index', 'index_view')->name('index');
    Route::view('show', 'show_view')->name('show');
    Route::view('create', 'create_view')->name('create');
});
