<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorial = DB::table('tutorial')->get();
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak'));
        return view('frontend.tutorial',compact('tutorial'))->with('tutorial', $tutorial);;
    }

    public function cari(Request $request)
    {
        //Menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari tabel puskeswan sesuai pencarian data
        $tutorial = DB::table('tutorial')
        ->where('judul','like',"%".$cari."%");

        //mengirim data tutorial ke view artikel
        return view('frontend.tutorial',compact('tutorial'));
    }

    public function ReadMore($id)
    {
        $tutorial = DB::table('users')->where('id_tutorial',$id)->first();
        return view('frontend.tutorial',compact('tutorial'));
    }
}