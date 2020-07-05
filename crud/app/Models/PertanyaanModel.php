<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function post($data){
        $pertanyaan_new = DB::table('pertanyaan')->insert($data);
        return $pertanyaan_new;
    }

    public static function get_byid($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function update($id, $request){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)
                        ->update([
                            'judul'=>$request['judul'],
                            'isi'=>$request['isi']
                        ]);
        return $pertanyaan;
    }

    public static function drop($id){
        $drop = DB::table('pertanyaan')->where('id', $id)->delete();
        return $drop;
    }
}