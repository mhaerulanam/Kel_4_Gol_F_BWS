<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use App\Models\peternak;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Models\Petugas;

class DataPetugasController extends Controller
{
    public function index()
    {
        $data = [
            'petugas' => Petugas::with('roles')->orderBy('id','desc')->where('is_admin',2)->get(),
        ];
        return view('backend.datapetugas.index',compact('data'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $datapetugas = null;
        return view('backend.datapetugas.create',compact('datapetugas'));
    }

    public function store(Request $request)
    {
        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request['password']),
        // ]);

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $role = 2;

        $data_simpan = [
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $role,
            'password' => Hash::make($request['password']),
        ];

        Petugas::create($data_simpan);

        return redirect()->route('datapetugas.index')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $datapetugas = Petugas::where('id',$id)->first();
        return view('backend.datapetugas.create',compact('datapetugas'));
    }

    public function update(Request $request, $id)
    {
        // DB::table('users')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request['password']),
        // ]);

        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            // 'nama' => 'required|string|max:100',
            // 'tingkatan' => 'required|numeric',
        ], $message)->validate();

        $data_simpan = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ];

        Petugas::where('id', $id)->update($data_simpan);

        return redirect()->route('datapetugas.index')
                        ->with('success','Data admin telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = Petugas::where('id',$id)->delete();
        return redirect()->route('datapetugas.index')
                        ->with('success','Data admin telah berhasil dihapus');
    }
}
