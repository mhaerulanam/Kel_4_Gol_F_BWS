<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\artikel;
use App\Models\dokter;
use App\Models\puskeswan;
use App\Models\tutorial;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $data = [
            'dokter' => Dokter::orderBy('id_dokter', 'desc')->paginate(3),
            'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
        ];
        return view('frontend.home',compact('data'));

    }

    public function cari(Request $request)
    {

        //Menangkap data pencarian
        $cari = $request->cari_petugas;
        $kategori = $request->kategori_kecamatan;

        $kode = 11;

        //mengambul data dari tabel dokter sesuai pencarian data
        $data = [
            'dokter' => DB::table('dokter')
            ->where('alamat', 'LIKE', '%' . $kategori . '%')
            ->where('nama','like',"%".$cari."%")
            ->paginate(3),
        ];

        //mengirim data artikel ke view dokter
        return view('frontend.home',compact('data','kode'));
    }
}
