<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\peternak;

class ProfilController extends Controller
{
    
    public function index()
    {
        $profil = DB::table('peternak')->paginate();
        return view('frontend.profil',compact('profil'));  
    }

    // public function edit($id)
    // {
    //     $profil = Peternak::where('id',$id)->first();
    //     return view('frontend.editprofil',compact('profil'));
    // }
    // public function update(Request $request, $id)
    // {
    //     // DB::table('users')->where('id',$request->id)->update([
    //     //     'name' => $request->name,
    //     //     'username' => $request->username,
    //     //     'email' => $request->email,
    //     //     'password' => Hash::make($request['password']),
    //     // ]);

    //     $message = [
    //         'numeric' => ':attributer harus diisi nomor.'
    //     ];

    //     $validator = FacadesValidator::make($request->all(),[
    //         // 'nama' => 'required|string|max:100',
    //         // 'tingkatan' => 'required|numeric',
    //     ], $message)->validate();

    //     $data_simpan = [
    //         'namadepan_peternak' => $request->namadepan_peternak,
    //         'namabelakang_peternak' => $request->namabelakang_peternak,
    //         'email_peternak' => $request->email_peternak,
    //         'no_hp' => $request->no_hp,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'alamat' => $request->alamat,
    //         'foto_peternak' => $request->foto_peternak,
    //     ];

    //     Peternak::where('id', $id)->update($data_simpan);

    //     return redirect()->route('profil.index')
    //                     ->with('success','Data peternak telah berhasil diperbarui');
    // }
}
