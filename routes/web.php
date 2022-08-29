<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\RegisterController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login/user1', 'LoginController@showUser1LoginForm');
Route::get('/login/user2', 'LoginController@showUser2LoginForm');
Route::get('/login/user3', 'LoginController@showUser3LoginForm');
Route::get('/login/user4', 'LoginController@showUser4LoginForm');
Route::get('/login/user5', 'LoginController@showUser5LoginForm');
Route::get('/login/user6', 'LoginController@showUser6LoginForm');

Route::get('/register/user1', 'RegisterController@showUser1RegisterForm');
Route::get('/register/user2', 'RegisterController@showUser2RegisterForm');
Route::get('/register/user3', 'RegisterController@showUser3RegisterForm');
Route::get('/register/user4', 'RegisterController@showUser4RegisterForm');
Route::get('/register/user5', 'RegisterController@showUser5RegisterForm');
Route::get('/register/user6', 'RegisterController@showUser6RegisterForm');


Route::post('/login/user1', 'LoginController@user1Login');
Route::post('/login/user2', 'LoginController@user2Login');
Route::post('/login/user3', 'LoginController@user3Login');
Route::post('/login/user4', 'LoginController@user4Login');
Route::post('/login/user5', 'LoginController@user5Login');
Route::post('/login/user6', 'LoginController@user6Login');

Route::post('/register/user1', 'RegisterController@createUser1');
Route::post('/register/user2', 'RegisterController@createUser2');
Route::post('/register/user3', 'RegisterController@createUser3');
Route::post('/register/user4', 'RegisterController@createUser4');
Route::post('/register/user5', 'RegisterController@createUser5');
Route::post('/register/user6', 'RegisterController@createUser6');


Route::view('/home', 'home')->middleware('auth');
Route::view('/user1', 'user1');
Route::view('/user2', 'user2');
Route::view('/user3', 'user3');
Route::view('/user4', 'user4');
Route::view('/user5', 'user5');
Route::view('/user6', 'user6');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
