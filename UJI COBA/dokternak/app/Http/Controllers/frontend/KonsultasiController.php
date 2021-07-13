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
        ->get();
        return view('frontend.riwayatkonsultasi',compact('konsultasi'));
    }

    public function create($id)
    {
        $konsultasi = DB::table('konsultasi')
                ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
                ->get();

        return view('backend.data_artikel.create',compact('konsultasi'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal 15 huruf!!!',
            'max' => ':attribute URL harus diisi maksimal 100 huruf!!!',
            'mimes' => ':attribute harus berupa gambar dengan format (JPEG, PNG, dan SVG)',
        ];

        $status= "tampil";

        $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('data/data_artikel'), $getimageName);

        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' => $request->nama_penulis,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $getimageName,
            'sumber' => $request->sumber,
            'status' => $status,
        ];

        // Artikel::create($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel baru telah berhasil disimpan, dimohon untuk menunggu konfirmasi dari Admin')
                        ->with('image',$getimageName);
    }

    public function detail($id) {
        $konsultasi = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->get();

        $konsultasi2 = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->join('kategori_hewan', 'kategori_hewan.id_kategori', '=', 'konsultasi.id_kategori')
        ->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'konsultasi.id_ktg')
        ->where('konsultasi.id_dokter',$id)->first();
        return view('frontend.riwayatkonsultasi',compact('konsultasi2','konsultasi'));
    }

    public function riwayatKonsultasi($id){
        $konsultasi =  DB::table('riwayat_konsultasi')
                    ->join('konsultasi', 'konsultasi.id_konsultasi', '=', 'riwayat_konsultasi.id_konsultasi')
                    ->join('respon_konsultasi', 'respon_konsultasi.id_respon', '=', 'riwayat_konsultasi.id_respon')
                    ->join('peternak', 'peternak.id_peternak', '=', 'konsultasi.id_peternak')
                    ->where('id_peternak',$id)->first();
        return view('frontend.riwayatkonsultasi');
    }
}
