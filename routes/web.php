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
Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logOut');
Route::get('/blog/entries/{id}', 'BlogController@showByEntrie');
Route::get('/blog/users/{id}', 'BlogController@showByName');
Route::post('/blog', 'BlogController@entradaBlog');
Route::get('/blog', 'BlogController@showBlog');

Route::group(
    [
    ],
    function () {
        Route::get('/', function () {
            $value = session('key');
            return view('front.home', array('value' => $value));
        });
        Route::get('/registrar', function () {
            return view('auth.register');
        });
        Route::get('/login', function () {
            return view('auth.login');
        });
        Route::get('/password-reset', function () {
            return view('auth.passwords.reset');
        });
    });
//
Route::group(
    [
        'prefix' => 'itemcms',
        'as' => 'itemcms.',
        'middleware' => ['auth', 'stats']
    ],
    function () {
    });
//
//Route::group(
//    [
//        'prefix' => 'itemcms',
//    ],
//    function () {
//        Auth::routes();
//    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
