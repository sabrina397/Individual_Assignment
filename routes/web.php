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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/staff', 'HomeController@staff')->name('staff');
Route::get('/system/supportstaff/add','AdminController@showAddStaffForm');
Route::post('/system/supportstaff/add','AdminController@addStaff');
Route::get('/system/buses/add','BusController@showAddBusForm');
Route::get('/system/buses/list','BusController@busList');
Route::post('/system/buses/add','BusController@addBus');
Route::post('/signin','UserController@signin');
Route::get('/system/busesshedule/{id}/edit','BusController@showEditForm');
Route::get('/system/busesshedule/{id}/delete','BusController@deleteBus');
Route::patch('/system/busesshedule/{id}/edit','BusController@updateBus');
Route::get('/system/profile/{id}/profile','UserController@profile');
Route::get('/system/profile/{id}/edit','UserController@editProfile');
Route::patch('/system/profile/{id}/edit','UserController@updateProfile');

