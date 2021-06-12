<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuskeswanController extends Controller
{
    public function index()
    {
        $puskeswan = DB::table('puskeswan')->paginate(3);
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak'));
        return view('frontend.puskeswan',compact('puskeswan'))->with('puskeswan', $puskeswan);;
    }

    public function cari(Request $request)
    {
        //Menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari tabel artikel sesuai pencarian data
        $puskeswan = DB::table('puskeswan')
        ->where('judul','like',"%".$cari."%")
        ->paginate(3);

        //mengirim data artikel ke view artikel
        return view('frontend.puskeswan',compact('puskeswan'));
    }

    public function detail($id)
    {
        $puskeswan = DB::table('puskeswan')->where('id_puskeswan',$id)->first();
        return view('frontend.detailpuskeswan',compact('puskeswan'));
    }

}
