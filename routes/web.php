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

Route::get('/test', 'TheifController@index')->name('backend.theif');
Route::get('/test/{page}', 'TheifController@changePage')->name('backend.theif.page');
Route::get('/test/detail/{key}', 'TheifController@detail')->name('backend.theif.detail');

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

//User
Route::get('/admin/user', 'UserController@index')->name('user.index');
// Thể loại
Route::get('/admin/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/admin/categories/create', 'CategoriesController@create')->name('categories.create');
Route::post('/admin/categories/store', 'CategoriesController@store')->name('categories.store');
Route::get('/admin/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
Route::put('/admin/categories/update/{id}', 'CategoriesController@update')->name('categories.update');
Route::delete('/admin/categories/delete/{id}', 'CategoriesController@destroy')->name('categories.destroy');
// Avatar
Route::get('/admin/avatar', 'AvatarController@index')->name('avatar.index');

Route::post('/admin/user/active/{id}', 'UserController@update')->name('user.active');
