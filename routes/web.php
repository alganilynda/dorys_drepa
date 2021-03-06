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





 Route::redirect('/', '/fr');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name("welcome");
    Route::get('dorys', function () {
	    return view('dorys');
    })->name("dorys");
     Route::get('congrè', function () {
	    return view('congrè');
	})->name("congrè");



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

