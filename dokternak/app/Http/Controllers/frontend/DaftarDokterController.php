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
        $cari = $request->cari_petugas;

        $kode = 11;

        //mengambul data dari tabel dokter sesuai pencarian data
        $data = [
            'dokter' => DB::table('dokter')
            ->where('alamat', 'LIKE', '%' . $cari . '%')
            ->where('nama_dokter','like',"%".$cari."%")
            ->paginate(3),
        ];

        //mengirim data artikel ke view dokter
        return view('frontend.dokter',compact('data','kode'));
    }

    public function detail($id) {
        $dokter = DB::table('dokter')->where('id_dokter',$id)->first();
        return view('frontend.detaildokter',compact('dokter'));
    }


}
