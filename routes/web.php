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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => [ 'auth'] ], function(){
    Route::resource('/profiles', 'User\ProfileController');
});

Route::group(['middleware' => [ 'auth', 'role:admin'] ], function(){
    Route::resource('/accounts', 'User\AccountController');
    Route::get('/s-admin', 'S_admin\HomeController@index')->name('s-admin');
    Route::resource('/roles', 'S_admin\RoleController');

    Route::get('/menus_role/{role}', 'S_admin\MenuController@role')->name("menu_role");
    Route::resource('/menus', 'S_admin\MenuController');

});

Route::group(['middleware' => [ 'auth', 'role:amdin|uadmin'] ], function(){
    Route::resource('/users', 'S_admin\UsersManagementController');
});

Route::group(['middleware' => [ 'auth', 'role:uadmin'] ], function(){
    Route::resource('/accounts', 'User\AccountController');
});