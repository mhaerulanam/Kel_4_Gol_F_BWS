<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeternakController extends Controller
{
    public function index()
    {
        $peternak = DB::table('users')->get();
        return view('backend.peternak.index',compact('peternak'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $peternak = null;
        return view('backend.peternak.create',compact('peternak'));
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $peternak = DB::table('users')->where('id',$id)->first();
        return view('backend.peternak.create',compact('peternak'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $peternak = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil dihapus');
    }
}
