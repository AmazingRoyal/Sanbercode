<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JawabanModel extends Model
{
    //
    public static function get($id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        //dd($jawaban);
        return $jawaban;
    }

    public static function post($data){
        $jawaban_new = DB::table('jawaban')->insert($data);
        return $jawaban_new;
    }
}
