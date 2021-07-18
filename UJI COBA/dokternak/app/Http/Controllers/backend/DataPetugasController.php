<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use App\Models\DokterUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Models\Petugas;
use App\Models\Role;
use Barryvdh\DomPDF\Facade as PDF;

class DataPetugasController extends Controller
{
    public function index()
    {

        $data = DokterUser::select('dokter.*', 'users.*')
            ->join('users', 'users.id', '=', 'dokter.id') 
            ->where('is_admin',0)
            ->get();

        return view('backend.datapetugas.index',compact('data'));
    }

    public function cetak_pdf()
    {
        $data = [
            'petugas' => Petugas::with('roles')->where('is_admin',2)->get(),
            // 'petugas' => Petugas::with('roles')->orderBy('id','desc')->where('is_admin',2)->get(),
        ];
    	$pdf = PDF::loadview('backend/datapetugas/cetak_pdf',['data'=>$data]);
    	return view ('backend.datapetugas.cetak_pdf',compact('data'));
    }

    public function create()
    {
        // $role =  Role::where('id_role',2)->first();
        $datapetugas = null;
        return view('backend.datapetugas.create',compact('datapetugas'));
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

        $getimageName = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move(public_path('data/data_dokter'), $getimageName);

        $data_simpan = [
            'nama_dokter' => $request->nama_dokter,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $request->foto,
            'id_jabatan' => $request->id_jabatan,
            'jadwal_kerja' => $request->jadwal_kerja,
            'sertifikasi' => $request->sertifikasi,
        ];

        DokterUser::create($data_simpan);

        return redirect()->route('datapetugas.index')
                        ->with('success','Data petugas baru telah berhasil disimpan')
                        ->with('image',$getimageName);
    }

    public function edit($id)
    {
        $datapetugas = DokterUser::select('dokter.*','users.*')
        ->join('users', 'users.id', '=', 'dokter.id') 
        ->where('id_dokter', $id)->first();
        return view('backend.datapetugas.create',compact('datapetugas'));
    }

    public function update(Request $request, $id)
    {
        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
        ], $message)->validate();

        $status= "tampil";


        $gbr=$request->nama_gambar;
        
        if($request->has('foto_peternak')) {
            $getimageName = time().'.'.$request->foto_peternak->getClientOriginalExtension();
            $request->foto_peternak->move(public_path('data/data_peternak'), $getimageName);
        }else {
            $getimageName = $gbr;
        }

        $data_simpan = [
            'nama_dokter' => $request->nama_dokter,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $getimageName,
            'sertifikasi' => $request->sertifikasi,
            'jadwal_kerja' => $request->jadwal_kerja,
        ];

        DokterUser::where('id_dokter', $id)->update($data_simpan);

        return redirect()->route('datapetugas.index')
                        ->with('success','Data Petugas telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = User::where('id',$id)->delete();
        $petugasuser= DokterUser::where('id',$id)->delete();
        return redirect()->route('datapetugas.index')
                        ->with('success','Data Petugas telah berhasil dihapus');
    }
}