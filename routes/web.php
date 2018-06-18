<?php

use Carbon\Carbon;
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
Route::get('/', function() {
    $today = Carbon::today();
    $future = Carbon::today()->addWeeks(4)->toDateString();
    return view('temp.opA', compact('today', 'future'));
});
Route::get('optb', function() {
    return view('temp.optB', compact('times'));
});

// Route::get('/', 'HomeController@index');

Route::resource('blog','BlogController');

Route::get('loader', function(){
    return view('tests.loader');
});

Route::get('docs/{version}/{page?}', 'DocsController@show');
