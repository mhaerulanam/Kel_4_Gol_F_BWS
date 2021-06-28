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
        // $rekam_medik = DB::table('rekam_medik')->get();
        $rekam_medik = rekam_medik::join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'rekam_medik.id_ktg')
                    ->join('kategori_hewan', 'kategori_hewan.id_kategori','=','rekam_medik.id_kategori')
                    ->orderBy('id_rmd','desc')
                    ->get();
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
        // $id_rmd= "RMD$kode";

        $data_simpan = [
            'id_rmd' => $kode,
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

        return redirect()->back()->with('success','Data Rekam Medik baru telah berhasil disimpan');
    }

    public function edit(Request $request, $id_rmd)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            rekam_medik::where(['id_rmd'=>$id_rmd])->update(['tanggal'=>$data['tanggal'], 
            'id_kategori'=>$data['id_kategori'],
            'id_ktg'=>$data['id_ktg'],
            'nama_hewan'=>$data['nama_hewan'],
            'nama_peternak' =>$data['nama_peternak'],
            'alamat'=>$data['alamat'],
            'keluhan'=>$data['keluhan'],
            'diagnosa'=>$data['diagnosa'],
            'pelayanan'=>$data['pelayanan']]);

            return redirect()->back()->with('success','Data Rekam Medik telah berhasil diperbarui');
        }

    
    }

    public function delete($id_rmd)
    {
        rekam_medik::where(['id_rmd'=>$id_rmd])->delete();
        return redirect()->back()->with('success','Data rekam medik telah berhasil dihapus');
    }

}

