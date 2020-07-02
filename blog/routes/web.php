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

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::get('/welcome', 'AuthController@welcome');

Route::get('/master', function() {
    return view('master');
});
