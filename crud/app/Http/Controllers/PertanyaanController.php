<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

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

    public function show($id){
        $pertanyaan = PertanyaanModel::get_byid($id);
        $jawaban = JawabanModel::get($id);
        return view('pertanyaan_detail', compact('pertanyaan', 'jawaban'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::get_byid($id);
        return view('edit_form', compact('pertanyaan'));
    }

    public function update($id){
        $data = ['judul'=>request('InputJudul'), 'isi'=>request('InputIsi'), 'created_at'=>date('Y-m-d H:i:s')];
        
        $pertanyaan = PertanyaanModel::update($id, $data);
        return redirect('/pertanyaan');
    }

    public function drop($id){
        $drop_pertanyaan = PertanyaanModel::drop($id);
        $drop_jawaban = JawabanModel::drop($id);
        return redirect('/pertanyaan');
    }
}
