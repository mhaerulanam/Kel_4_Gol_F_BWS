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
          'dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->paginate(3),
          'pencarian_dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get(),
          'artikel' => DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
          ->orderBy('id_artikel','desc')
          ->where('status','=','tampil')
          ->paginate(2),
            'tutorial' => Tutorial::orderBy('judul_tutorial', 'desc')->paginate(4),
            
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
            ->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')
            ->where('tempat', 'LIKE', '%' . $kategori . '%')
            ->where('nama_dokter','like',"%".$cari."%")
            ->paginate(3),
            'pencarian_dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get(),
            'artikel' => DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
            ->orderBy('id_artikel','desc')
            ->where('status','=','tampil')
            ->paginate(2),
            'tutorial' => Tutorial::orderBy('id_tutorial')->paginate(3),
        ];

        //mengirim data artikel ke view dokter
        return view('frontend.home',compact('data','kode'));
    }

    public function detail($id) {
        $tutorial = DB::table('tutorial')->where('id_tutorial',$id)->first();
        return view('frontend.detailtutorial',compact('tutorial'));
    }
}
