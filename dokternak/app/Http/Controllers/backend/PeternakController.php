<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeternakController extends Controller
{
    public function index()
    {
        // $peternak = DB::table('peternak')->get();
        // return view('backend.peternak.index',compact('peternak'));
        return view('backend.peternak.index');
    }


    public function create()
    {
        $peternak = null;
        return view('backend.peternak.create',compact('peternak'));
    }

    public function store(Request $request)
    {
        DB::table('peternak')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $pendidikan = DB::table('peternak')->where('id',$id)->first();
        return view('backend.peternak.create', compact('pendidikan'));
    }

    public function update(Request $request)
    {
        DB::table('peternak')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pendidikan = DB::table('peternak')->where('id',$id)->delete();
        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil dihapus');
    }
}
