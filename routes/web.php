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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Authtentication\LoginController@index');
Route::post('/checkLogin', 'Authtentication\LoginController@ChekLogin');
Route::get('/registor', 'UserControllers\RegistorController@index');
Route::get('/logout', 'Authtentication\LoginController@logout');
Route::group(['middleware' => 'userAuthentication'], function () {
    Route::get('/admindashboard', 'AdminControllers\AdminDashboardController@index');
    Route::get('/userdashboard', 'UserControllers\DashBoardController@index');
    Route::get('/add-attendence', 'UserControllers\AddAttendenceController@index');
});
Route::group(['middleware' => 'addminAuthentication'], function () {
    Route::get('/getNotification', 'AdminControllers\AdminDashboardController@getNotification');
    
    // Route::get('/add-attendence', 'UserControllers\AddAttendenceController@index');
});

