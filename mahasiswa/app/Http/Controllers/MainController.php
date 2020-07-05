<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $mahasiswa = DB::table('data_mahasiswa')->get();
        return view('mahasiswa', ['mahasiswa'=>$mahasiswa]);
    }
}

