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

Route::match(['get', 'post'], '/admin/develop/register', "User\Register@index");
Route::match(['get', 'post'], '/admin/akses/register', "User\Register@store");
Route::match(['get', 'post'], '/admin/login', "User\Login@index");
Route::match(['get', 'post'], '/admin/akses/login', "User\Login@store");
Route::match(['get', 'post'], '/admin/logout', "User\Login@destroy");
Route::match(['get', 'post'], '/admin/user/home', "User\Home\Index@index")->middleware(['auth']);
