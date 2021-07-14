<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->orderBy('tanggal','desc')
        ->get();
        return view('frontend.riwayatkonsultasi',compact('konsultasi'));
    }

    public function detail($id) {
        $konsultasi = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->orderBy('tanggal','desc')
        ->get();

        $konsultasi2 = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->join('kategori_hewan', 'kategori_hewan.id_kategori', '=', 'konsultasi.id_kategori')
        ->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'konsultasi.id_ktg')
        ->where('konsultasi.id_dokter',$id)
        ->first();
        return view('frontend.riwayatkonsultasi',compact('konsultasi2','konsultasi'));
    }

}
