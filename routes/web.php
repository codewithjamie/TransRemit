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
Route::get('/auth/register', 'AuthController@fetch_register')->name('/auth/register');
Route::get('logout', 'AuthController@logoutLink')->name('logout');

Route::post('/login', 'AuthController@postLogin')->name('login');
Route::post('/register-admin', 'AuthController@postReg')->name('register-admin');

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
Route::get('/dashboard/admin', 'dashboardController@admin')->name('/admin');
Route::get('/dashboard/agent', 'dashboardController@agent')->name('/agent');
Route::get('/dashboard/ga', 'dashboardController@ga')->name('/ga');
Route::get('/dashboard/profile', 'dashboardController@profileLink')->name('profile');
Route::get('/dashboard/report', 'dashboardController@reportLink')->name('report');
Route::get('/dashboard/logs', 'LogController@index')->name('/logs');



/*
 ***********************************************************************************
 **************************** Complete System Routing  *****************************
 ***********************************************************************************
*/
Route::get('/dashboard/branches', 'BranchController@index')->name('dashboard/branches');
Route::get('/dashboard/edit-branch/{id}', 'BranchController@edit')->name('edit-branch');
Route::post('/store-branch', 'BranchController@store')->name('store-branch');
Route::patch('/update-branch/{id}', 'BranchController@update')->name('update-branch');
Route::delete('delete-branch/{id}', 'BranchController@destroy')->name('delete-branch');

Route::get('/dashboard/all-gas', 'GAController@index')->name('dashboard/all-gas');
Route::get('/dashboard/edit-ga/{id}', 'GAController@edit')->name('edit-ga');
Route::post('/store-ga', 'GAController@store')->name('store-ga');
Route::patch('/update-ga/{id}', 'GAController@update')->name('update-ga');
Route::delete('delete-ga/{id}', 'GAController@destroy')->name('delete-ga');


Route::get('/dashboard/unions', 'UnionController@index')->name('dashboard/unions');
Route::get('/dashboard/edit-union/{id}', 'UnionController@edit')->name('edit-union');
Route::post('/store-union', 'UnionController@store')->name('store-union');
Route::patch('/update-union/{id}', 'UnionController@update')->name('update-union');
Route::delete('delete-union/{id}', 'UnionController@destroy')->name('delete-union');

Route::get('/dashboard/agents', 'AgentController@index')->name('dashboard/agents');
Route::get('/dashboard/add-agent', 'AgentController@create')->name('dashboard/add-agent');
Route::post('dashboard/store-agent', 'AgentController@store')->name('store-agent');
Route::get('/dashboard/show-agent/{id}', 'AgentController@show')->name('show-agent');
Route::get('/dashboard/edit-agent/{id}', 'AgentController@edit')->name('edit-agent');
Route::patch('/update-agent/{id}', 'AgentController@update')->name('update-agent');
Route::delete('delete-agent/{id}', 'AgentController@destroy')->name('delete-agent');

Route::get('/dashboard/all-riders', 'system_riderController@index')->name('dashboard/all-riders');
Route::get('/dashboard/add-rider', 'system_riderController@create')->name('dashboard/add-rider');
Route::post('/dashboard/store-rider', 'system_riderController@store')->name('store-rider');
Route::get('/dashboard/view-rider/{id}', 'system_riderController@show')->name('show-rider');
Route::get('/dashboard/edit-rider/{id}', 'system_riderController@edit')->name('edit-rider');
Route::patch('/update-rider/{id}', 'system_riderController@update')->name('update-rider');
Route::delete('/delete-rider/{id}', 'system_riderController@destroy')->name('delete-rider');

Route::post('update-user', 'AuthController@update_info')->name('update-user');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');



/*
 ***********************************************************************************
 **************************** Location Routing Ends  *****************************
 ***********************************************************************************
*/
Route::get('dropdownlist','LocationController@index');
Route::get('get-state-list','LocationController@getStateList');
Route::get('get-city-list','LocationController@getCityList');
Route::get('get-lga-list','LocationController@getLGAList');
