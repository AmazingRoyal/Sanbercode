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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/registration', function () {
//     return view('form');
// });

// Route::get('/welcome/{firstname}/{lastname}', function ($firstname, $lastname) {
//     return view('welcome', $firstname, $lastname);
// });

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/jawaban/{id}', 'JawabanController@index');
Route::post('/jawaban/{id}', 'JawabanController@store');

Route::get('/master', function() {
    return view('master');
});
