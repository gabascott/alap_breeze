<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ingatlanok extends Controller
{
    public function ingatlan_listaz(){
        $ingatlan = DB::table('ingatlanok')
        ->select('kategoria', 'leiras', 'hirdetesDatuma', 'tehermentes', 'kepUrl')
        ->distinct()
        ->get()
        return $ingatlan;
    }
}
