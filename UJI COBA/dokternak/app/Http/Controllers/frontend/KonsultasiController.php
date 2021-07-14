<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use App\Models\PeternakUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        // $konsultasi = DB::table('konsultasi')
        // ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        // ->where('konsultasi.id_peternak')
        // ->orderBy('tanggal','desc')
        // ->get();

        $id = Auth::id();
        $peternak = PeternakUser::where('id', $id)->first();
        $id_peternak = $peternak->id_peternak;

        $konsultasi = Konsultasi::select('konsultasi.*','dokter.*','peternak.*')
                    ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
                    ->join('peternak', 'peternak.id_peternak', '=', 'konsultasi.id_peternak')
                    ->where('konsultasi.id_peternak',$id_peternak)
                    ->orderBy('tanggal','desc')
                    ->get();

        return view('frontend.riwayatkonsultasi',compact('konsultasi'));
        // return $konsultasi;
    }

    public function detail($id) {
        $idu = Auth::id();
        $peternak = PeternakUser::where('id', $idu)->first();
        $id_peternak = $peternak->id_peternak;

        $konsultasi = Konsultasi::select('konsultasi.*','dokter.*','peternak.*')
                    ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
                    ->join('peternak', 'peternak.id_peternak', '=', 'konsultasi.id_peternak')
                    ->where('konsultasi.id_peternak',$id_peternak)
                    ->orderBy('tanggal','desc')
                    ->get();

        // $konsultasi2 = DB::table('konsultasi')
        // // ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        // // ->join('kategori_hewan', 'kategori_hewan.id_kategori', '=', 'konsultasi.id_kategori')
        // // ->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'konsultasi.id_ktg')
        // ->where('konsultasi.id_konsultasi',$id)
        // ->get();

        // $konsultasi2 = Konsultasi::find($id);
        $konsultasi2 = Konsultasi::select('konsultasi.*','dokter.*','peternak.*','kategori_artikel.*','kategori_hewan.*')
                    ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
                    ->join('peternak', 'peternak.id_peternak', '=', 'konsultasi.id_peternak')
                    ->join('kategori_hewan', 'kategori_hewan.id_kategori', '=', 'konsultasi.id_kategori')
                    ->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'konsultasi.id_ktg')
                    ->where('konsultasi.id_peternak',$id_peternak)
                    ->where('konsultasi.id_konsultasi',$id)
                    ->orderBy('tanggal','desc')
                    ->get();

        return view('frontend.riwayatkonsultasi',compact('konsultasi2','konsultasi'));
        // return $konsultasi2;
    }

}
