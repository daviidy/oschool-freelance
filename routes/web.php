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

Route::resource('jobs', 'JobController');

Route::resource('proposals', 'ProposalController');

Route::resource('users', 'UserController');


Route::get('/', function () {
    return view('homepage');
});

/*Route::get('/dashboard', function () {
  if (Auth::guest()) {
    return view('auth.login');
  }

  elseif (Auth::user()) {
    return view('users.dashboard');
  }

});*/

Route::get('/mes-jobs', function () {
  if (Auth::guest()) {
    return view('auth.login');
  }

  elseif (Auth::user()) {
    $user = Auth::user();
    $proposals = Auth::user()->proposals;
    return view('users.mes-jobs', ['user' => $user, 'proposals' => $proposals ]);
  }
});

Route::get('/notifications', function () {
  if (Auth::guest()) {
    return view('auth.login');
  }

  elseif (Auth::user()) {
    $user = Auth::user();
    return view('users.notifications', ['user' => $user]);
  }
});

Route::get('/apropos', function () {
    return view('apropos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
