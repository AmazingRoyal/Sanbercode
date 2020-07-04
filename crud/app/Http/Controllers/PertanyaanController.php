<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get();
        //dd($pertanyaan);
        return view('pertanyaan', compact('pertanyaan'));
    }

    public function create(){
        return view('form');
    } 

    public function store(){
        $data = ['judul'=>request('InputJudul'), 'isi'=>request('InputIsi')];
        $pertanyaan = PertanyaanModel::post($data);
        return redirect('/pertanyaan');
    }
}
