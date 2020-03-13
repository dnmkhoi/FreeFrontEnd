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


Route::group(['middleware' => 'auth'], function()
{
    Route::get('/admin', 'BackendController@dashboard')->name('backend.dashboard');

});
Route::post('admin/login', [
    'uses'          => 'Auth\AuthController@login',
    'middleware'    => 'checkstatus',
]);

// Xác thực Routes...
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
// Đăng ký Routes...
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\RegisterController@register');

//
Route::get('/admin/user', 'UserController@index')->name('user.index');

Route::post('/admin/user/active/{id}', 'UserController@update')->name('user.active');
