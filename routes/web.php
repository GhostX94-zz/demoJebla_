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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'UserController@home');

Route::get('login', 'UserController@login');

Route::get('account-details','UserController@account_details');

Route::get('account-settings','UserController@account_settings');

Route::get('active-projects','UserController@active_projects');

Route::get('analytics', 'UserController@analytics');

Route::get('boards', 'UserController@boards');

Route::get('browse', function(){return view('browse');});

Route::get('calendar',function(){return view('calendar');});

Route::get('events', function(){return view('events');});

Route::get('invoice', function(){return view('invoice');});

Route::get('invoices', function(){return view('invoices');});

Route::get('ios-apps-list', function(){return view('ios-apps-list');});

Route::get('messenger', function(){return view('messenger');});

Route::get('news-feed', function(){return view('news-feed');});

Route::get('plans', function(){return view('plans');});

Route::get('projects-board', function(){return view('projects-board');});

Route::get('projects', function(){return view('projects');});

Route::get('register', function(){return view('register');});

Route::get('ui-overview',function(){return view(ui-overview);});
