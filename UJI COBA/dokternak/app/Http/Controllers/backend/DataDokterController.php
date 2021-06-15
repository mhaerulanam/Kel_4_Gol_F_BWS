<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dokter;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataDokterController extends Controller
{
    public function index()
    {
        $dokter = DB::table('dokter')->get();
        return view('backend.dokter.index',compact('dokter'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $dokter = null;
        return view('backend.dokter.create',compact('dokter'));
    }

    public function store(Request $request)
    {
        DB::table('dokter')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $request->foto,
            'sertifikasi' => $request->sertifikasi,
            'id_jabatan' => $request->id_jabatan,
            'jadwal_kerja' => $request->jadwal_kerja,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('dokter.index')
                        ->with('success','Data dokter baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $dokter = DB::table('dokter')->where('id_dokter',$id)->first();
        return view('backend.dokter.create',compact('dokter'));
    }

    public function update(Request $request)
    {
        DB::table('dokter')->where('id_dokter',$request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'telpon' => $request->telpon,
            'foto' => $request->foto,
            'sertifikasi' => $request->sertifikasi,
            'jadwal_kerja' => $request->jadwal_kerja,
            'username' => $request->username,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('dokter.index')
                        ->with('success','Data dokter telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dokter = DB::table('dokter')->where('id_dokter',$id)->delete();
        return redirect()->route('dokter.index')
                        ->with('success','Data dokter telah berhasil dihapus');
    }
}
