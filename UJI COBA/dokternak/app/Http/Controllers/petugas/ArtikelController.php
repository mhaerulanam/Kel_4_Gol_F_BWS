<?php

namespace App\Http\Controllers\petugas;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = DB::table('artikel')->orderBy('tanggal', 'desc')->paginate(2);

        return view('petugas.artikel',compact('artikel'))->with('artikel', $artikel);;
        // return view('frontend.artikel');

        // mengirim data pegawai ke view index
		// return view('frontend.artikel',['artikel' => $artikel]);
    }

    public function cari(Request $request)
    {
        //Menangkap data pencarian
        $cari = $request->cari;

        //mengambul data dari tabel artikel sesuai pencarian data
        $artikel = DB::table('artikel')
        ->where('judul','like',"%".$cari."%")
        ->paginate(2);

        //mengirim data artikel ke view artikel
        return view('petugas.artikel',compact('artikel'));
    }

    public function ReadMore($id)
    {
        $artikel = DB::table('users')->where('id',$id)->first();
        return view('petugas.artikel',compact('artikel'));
    }

}
