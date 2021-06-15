<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rekam_medik;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RekammedikController extends Controller
{
    public function index()
    {
        $rekam_medik = DB::table('rekam_medik')->get();
        return view('petugas.rekam_medik.index', compact('rekam_medik'));
    }

    public function create()
    {
        $rekam_medik = null;
        return view('petugas.rekam_medik.index',compact('rekam_medik'));
    }

    public function store(Request $request)
    {

        $message = [
            'numeric' => ':attribute harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $kode = date('yHi'); //tahun,jam,menit
        $id_rmd= "RMD$kode";

        $data_simpan = [
            'id_rmd' => $id_rmd,
            'tanggal' => $request->tanggal,
            'id_kategori' => $request->id_kategori, 
            'id_ktg' => $request->id_ktg, 
            'nama_hewan' => $request->nama_hewan, 
            'nama_peternak' => $request->nama_peternak,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'pelayanan' => $request->pelayanan,
        ];

        rekam_medik::create($data_simpan);

        return redirect()->route('index')
                        ->with('success','Data rekam medik baru telah berhasil disimpan');
    }

    public function edit($id_rmd)
    {
        $rekam_medik = rekam_medik::where('id_rmd',$id_rmd)->first();
        return view('petugas.rekam_medik.index',compact('rekam_medik'));
    }

    public function update(Request $request, $id_rmd)
    {

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $data_simpan = [
            'tanggal' => $request->tanggal,
            'id_kategori' => $request->id_kategori, 
            'id_ktg' => $request->id_ktg, 
            'nama_hewan' => $request->nama_hewan, 
            'nama_peternak' => $request->nama_peternak,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'pelayanan' => $request->pelayanan,
        ];

        rekam_medik::where('id_rmd', $id_rmd)->update($data_simpan);

        return redirect()->route('index')
                        ->with('success','Data rekam_medik telah berhasil diperbarui');
    }

    public function destroy($id_rmd)
    {
        $rekam_medik = rekam_medik::where('id_rmd',$id_rmd)->delete();
        return redirect()->route('index')
                        ->with('success','Data rekam medik telah berhasil dihapus');
    }

}

