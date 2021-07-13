<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('frontend.riwayatkonsultasi');
    }

    public function create($id)
    {
        $dokter = DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get();
        $kategori_hewan = DB::table('kategori_hewan')->orderBy('id_kategori','asc')->get();
        $kategori_artikel = DB::table('kategori_artikel')->orderBy('id_ktg','asc')->get();
        return view('backend.data_artikel.create',compact('petugas','kategori_artikel','kategori_hewan'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal 15 huruf!!!',
            'max' => ':attribute URL harus diisi maksimal 100 huruf!!!',
            'mimes' => ':attribute harus berupa gambar dengan format (JPEG, PNG, dan SVG)',
        ];

        $validator = FacadesValidator::make($request->all(),[
            'judul' => 'required|string|min:15|max:100',
            'id_ktg' => 'required|string|max:15',
            'sumber' => 'required|string|min:15|max:200',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], $message)->validate();

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

        Artikel::create($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel baru telah berhasil disimpan, dimohon untuk menunggu konfirmasi dari Admin')
                        ->with('image',$getimageName);
    }

    public function detail($id) {
  
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
