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


/*
Route::get('/hello', function () {
    return 'welcome';
});


*/
Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/view_table', 'HomeController@view_table');

Route::get('/logs', 'HomeController@logs');

Route::get('/account_settings', 'HomeController@account_settings');

Route::get('/login', 'HomeController@login');
Auth::routes();


