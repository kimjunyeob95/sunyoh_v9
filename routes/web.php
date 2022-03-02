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


Route::get('/bio', 'App\Http\Controllers\BioController@showbios')->name('bio.list');
Route::get('/bio/get/{id}', 'App\Http\Controllers\BioController@getBio')->name('bio.get');
Route::get('/bio/delete/{id}', 'App\Http\Controllers\BioController@deleteBio')->name('bio.delete');

Route::get('/bio/create', [App\Http\Controllers\HomeController::class, 'bioCreate'])->name('bio.create');
Route::post('/bio/create', 'App\Http\Controllers\BioController@createOrUpdate')->name('bio.create');

Route::get('/bio/modify/{id}', [App\Http\Controllers\HomeController::class, 'bioModify'])->name('bio.modify');
Route::post('/bio/modify/{id}', 'App\Http\Controllers\BioController@createOrUpdate')->name('bio.modify');

Route::get('/bio/delete/{id}', 'App\Http\Controllers\BioController@deleteBio')->name('bio.delete');

// Route::post('/bio/create', 'App\Http\Controllers\BioController@savebio');
// Route::put('/bio/edit/{id}', 'App\Http\Controllers\BioController@savebio')->name('bio.update');
Route::get('/test',"App\Http\Controllers\LogController@index");
