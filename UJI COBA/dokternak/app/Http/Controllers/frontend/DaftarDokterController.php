<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarDokterController extends Controller
{
    public function index()
    {
        $dokter = DB::table('dokter')->paginate(3);
        $jabatan = DB::table('jabatan');

        return view('frontend.dokter',compact('dokter'))->with('dokter', $dokter);;
        // return view('frontend.artikel');

        // mengirim data pegawai ke view index
		// return view('frontend.artikel',['artikel' => $artikel]);
    }

    public function cari(Request $request)
    {
        //Menangkap data pencarian
        $cari = $request->cari;

        //mengambul data dari tabel artikel sesuai pencarian data
        $dokter = DB::table('dokter')
        ->where('nama_dokter','like',"%".$cari."%")
        ->paginate(2);

        //mengirim data artikel ke view artikel
        return view('frontend.dokter',compact('dokter'));
    }

    public function detail($id) {
        $dokter = DB::table('dokter')->where('id_dokter',$id)->first();
        return view('frontend.detaildokter',compact('dokter'));
    }

}
