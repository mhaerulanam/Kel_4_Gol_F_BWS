<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\puskeswan;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataPuskeswanController extends Controller
{
    public function index()
    {
        $data = [
            'puskeswan' => Puskeswan::orderBy('id_puskeswan','desc')->get(),
        ];
        return view('backend.data_puskeswan.index',compact('data'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $puskeswan = null;
        return view('backend.data_puskeswan.create',compact('puskeswan'));
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

        $role = 1;

        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' =>$request->nama_penulis,
            'judul' =>$request->judul,
            'isi' =>$request->isi,
            'gambar' =>$request->gambar,
            'sumber' =>$request->sumber,
        ];

        puskeswan::create($data_simpan);

        return redirect()->route('data_puskeswan.index')
                        ->with('success','Data puskeswan baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $puskeswan = Puskeswan::where('id_puskeswan',$id)->first();
        return view('backend.data_puskeswan.create',compact('puskeswan'));
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

        Puskeswan::where('id_puskeswan', $id)->update($data_simpan);

        return redirect()->route('data_puskeswan.index')
                        ->with('success','Data puskeswan telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $puskeswan = Puskeswan::where('id_puskeswan',$id)->delete();
        return redirect()->route('data_puskeswan.index')
                        ->with('success','Data puskeswan telah berhasil dihapus');
    }
}
