<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function register()
    {
        return view('register');
    }

    public function welcome()
    {
        //return view('welcome');
        return view('welcome');
    }
}