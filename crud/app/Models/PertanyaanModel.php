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

    
}