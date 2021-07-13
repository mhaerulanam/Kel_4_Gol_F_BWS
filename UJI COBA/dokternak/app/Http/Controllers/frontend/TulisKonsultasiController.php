<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Models\KatHewan;

class TulisKonsultasiController extends Controller
{
    public function index()
    {
        $petugas = DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get();
        $kategori_hewan = KatHewan::all();
        $kategori_artikel = DB::table('kategori_artikel')->orderBy('id_ktg','asc')->get();
        return view('frontend.tuliskonsultasi',compact('petugas','kategori_artikel','kategori_hewan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal 15 huruf!!!',
            'max' => ':attribute URL harus diisi maksimal 100 huruf!!!',
            'mimes' => ':attribute harus berupa gambar dengan format (JPEG, PNG, dan SVG)',
        ];

        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' => $request->nama_penulis,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'sumber' => $request->sumber,
            'status' => $request->status,
        ];

        $petugas = DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get();

        foreach ($petugas as $pegawai) {
            $id = $pegawai->nama;
        }

        // ArtikelUser::create($data_simpan);

        return redirect()->route('tulisartikel.index')
                        ->with('success','Artikel anda telah berhasil dikirim, mohon untuk menunggu konfirmasi dari Admin');
    }
}
