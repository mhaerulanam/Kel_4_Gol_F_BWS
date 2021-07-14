<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_obat;
use App\Models\dokter_obat;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataObatController extends Controller
{
    public function index()
    {
        $data_obat = DB::table('data_obat')->get();
        $obat_petugas = DB::table('users')->join('dokter','dokter.id','=','users.id')
                    ->join('dokter_obat','dokter_obat.id_dokter','=','dokter.id_dokter')
                    ->join('data_obat','data_obat.id_obat','=','dokter_obat.id_obat')
                    ->get();
        return view('petugas.data_obat.index', compact('data_obat','obat_petugas'));
    }

    public function create()
    {
        $data_obat = null;
        return view('petugas.data_obat.index',compact('data_obat'));
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

        $kode = date('ymdi');
        $data_simpan = [
            'id_obat' => $kode,
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok, 
            'supplier' => $request->supplier, 
            'expired' => $request->expired, 
            'keterangan' => $request->keterangan,
        ];

        $kode2 = date('yHi');
        $do = "DOB$kode2";
        $data_simpan2 = [
            'id_do' => $do,
            'id_dokter' =>$request->id_dokter,
            'id_obat' =>$kode,
        ];

        data_obat::create($data_simpan);
        dokter_obat::create($data_simpan2);

        return redirect()->back()->with('success','Data Obat telah berhasil disimpan');
    }

    public function edit(Request $request, $id_obat)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            data_obat::where(['id_obat'=>$id_obat])->update(['nama_obat'=>$data['nama_obat'], 
            'stok'=>$data['stok'],
            'supplier'=>$data['supplier'],
            'expired'=>$data['expired'],
            'keterangan' =>$data['keterangan']]);

            return redirect()->back()->with('success','Data Obat telah berhasil diperbarui');
        }

    
    }

    public function delete($id_obat)
    {
        data_obat::where(['id_obat'=>$id_obat])->delete();
        return redirect()->back()->with('success','Data Obat telah berhasil dihapus');
    }

}

