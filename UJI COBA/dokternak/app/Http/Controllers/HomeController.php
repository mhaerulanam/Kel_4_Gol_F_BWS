<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artikel;
use App\Models\dokter;
use App\Models\puskeswan;
use App\Models\tutorial;
use App\Models\jabatan;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->paginate(3),
            'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
            'dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->paginate(3),
        ];
        return view('frontend.home',compact('data'));
        // return view('frontend.home');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function lppetugas()
    {
        // $data = [
        //     'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
        // ];
        // return view('petugas.home',compact('data'));
        // $id_petugas = Auth::user()->id;
        $petugas = DB::table('users')->join('dokter','dokter.id','=','users.id')
            ->join('jabatan','jabatan.id_jabatan','=','dokter.id_jabatan')
            ->get();
        $data = [
            'artikel' => DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')
            ->orderBy('id_artikel','desc')
            ->where('status','=','tampil')
            ->paginate(2),
          ];
        return view('petugas.home',compact('data','petugas'));
    }
}
