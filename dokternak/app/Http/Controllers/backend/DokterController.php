<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function index()
    {
        $userdokter = DB::table('users')->get();
        return view('backend.userdokter.index',compact('userdokter'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $userdokter = null;
        return view('backend.userdokter.create',compact('userdokter'));
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('userdokter.index')
                        ->with('success','Data dokter baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $userdokter = DB::table('users')->where('id',$id)->first();
        return view('backend.userdokter.create',compact('userdokter'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('userdokter.index')
                        ->with('success','Data dokter telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $userdokter = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('userdokter.index')
                        ->with('success','Data peternak telah berhasil dihapus');
    }
}
