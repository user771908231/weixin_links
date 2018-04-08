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
    return view('welcome');
});

//Route :: get("weixin",function (){
//    return 1;
//});

Route::prefix('weixin')->group(function () {
    Route::get('/', function () {
       return "/weixin";
    });
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
});



