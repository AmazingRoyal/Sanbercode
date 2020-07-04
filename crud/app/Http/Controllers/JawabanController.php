<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index($id){
        $jawaban = JawabanModel::get($id);
        return view('jawaban', compact('jawaban', 'id'));
    }

    public function store($id){
        $data = ['pertanyaan_id'=>$id, 'isi'=>request('InputIsi')];
        $jawaban = JawabanModel::post($data);
        var_dump($id);
        return redirect('/jawaban/{{$id}}');
    }
}
