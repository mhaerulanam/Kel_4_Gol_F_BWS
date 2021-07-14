<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak')); 
        return view('petugas.tentangkami');
    }
}
