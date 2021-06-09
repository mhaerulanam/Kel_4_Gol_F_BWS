<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::table('users')->get();
        return view('backend.admin.index',compact('admin'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $admin = null;
        return view('backend.admin.create',compact('admin'));
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('admin.index')
                        ->with('success','Data admin baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $admin = DB::table('users')->where('id',$id)->first();
        return view('backend.admin.create',compact('admin'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('admin.index')
                        ->with('success','Data admin telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('admin.index')
                        ->with('success','Data admin telah berhasil dihapus');
    }
}
