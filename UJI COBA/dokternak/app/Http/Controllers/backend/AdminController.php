<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'admin' => Admin::orderBy('id','desc')->get(),
        ];
        return view('backend.admin.index',compact('data'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $admin = null;
        return view('backend.admin.create',compact('admin'));
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
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $role,
            'password' => Hash::make($request['password']),
        ];

        peternak::create($data_simpan);

        return redirect()->route('admin.index')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $admin = Admin::where('id',$id)->first();
        return view('backend.admin.create',compact('admin'));
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

        Admin::where('id', $id)->update($data_simpan);

        return redirect()->route('admin.index')
                        ->with('success','Data admin telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $admin = Peternak::where('id',$id)->delete();
        return redirect()->route('admin.index')
                        ->with('success','Data admin telah berhasil dihapus');
    }
}
