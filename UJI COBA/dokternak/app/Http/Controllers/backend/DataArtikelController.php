<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artikel;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataArtikelController extends Controller
{
    public function index()
    {
        $data = [
            'artikel' => Artikel::orderBy('id_artikel','desc')->get(),
        ];
        return view('backend.data_artikel.index',compact('data'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $artikel = null;
        return view('backend.data_artikel.create',compact('artikel'));
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

        artikel::create($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $artikel = Artikel::where('id_artikel',$id)->first();
        return view('backend.data_artikel.create',compact('artikel'));
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

        Artikel::where('id_artikel', $id)->update($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $artikel = Artikel::where('id_artikel',$id)->delete();
        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel telah berhasil dihapus');
    }
}
