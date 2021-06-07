<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class DetailArtikelController extends Controller
{
    public function index()
    {
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak'));
        return view('frontend.detailartikel');
    }
}