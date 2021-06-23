<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\peternak;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class PeternakController extends Controller
{
    public function index()
    {
        $data = [
            'peternak' => Peternak::with('roles')->where('is_admin',0)->paginate(2),
        ];
        return view('backend.peternak.index',compact('data'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $peternak = null;
        return view('backend.peternak.create',compact('peternak'));
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

        $role = 0;

        $data_simpan = [
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $role,
            'password' => Hash::make($request['password']),
        ];

        peternak::create($data_simpan);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $peternak = Peternak::where('id',$id)->first();
        return view('backend.peternak.create',compact('peternak'));
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

        Peternak::where('id', $id)->update($data_simpan);

        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $peternak = Peternak::where('id',$id)->delete();
        return redirect()->route('peternak.index')
                        ->with('success','Data peternak telah berhasil dihapus');
    }
}
