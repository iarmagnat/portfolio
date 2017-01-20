<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::post('/contact/{locale}', 'ContactController@sendMail');

Route::get('/{page}/fr', function ($page){
    return view( $page, ['active' => $page]);
});

Route::get('/{page}/en', function ($page){
    App::setLocale('en');
    return view( $page, ['active' => $page]);
});

Route::get('/', function (){
    return view( 'home', ['active' => 'home']);
});