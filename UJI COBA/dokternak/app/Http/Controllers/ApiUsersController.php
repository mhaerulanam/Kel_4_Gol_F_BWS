<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peternak;
use App\Models\PeternakUser;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ApiUsersController extends Controller
{
    public function getAll() 
    {
        $peternak = Peternak::all();
        return response()->json($peternak, 201);
    }

    public function getUsers($id) 
    {
        $peternak = Peternak::find($id);
        return response()->json($peternak, 200);
    }

    public function createUsers(Request $request) 
    {
        Peternak::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Peternak Berhasil Ditambahkan!'
        ], 201);
    }

    public function updateUsers($id, Request $request) 
    {
        Peternak::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Peternak Berhasil Dirubah!'
        ], 201);
    }

    public function deleteUsers($id) 
    {
        Peternak::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Peternak Berhasil Dihapus!'
        ], 201);
    }

    public function loginUser(Request $request){
        $user =  Peternak::where('email',$request->email)->first();
        // if ($user) {
        //     if (password_verify($request->password,$user->password)) {
        //         return response()->json([
        //             'success' => 1,
        //             'message' => 'Selamat Datang '.$user->name,
        //             'user' => $user
        //         ]);
        //     }
        //     return $this->error('Password Salah');
        // } else {
        //     return $this->error('Email tidak terdaftar');
        // }

        $user = User::where('email',$request->email)->first();

        $password_user = $user->password;

        if(!$user || !Hash::check($request->password, $password_user)){
            return response(
                [
                    'status'=>401,
                    'message' => 'Gagal Login!',
                ]
            ,401);
        }else{
            $user_d = PeternakUser::select('users.*','peternak.*')
            ->join('users', 'users.id', '=', 'peternak.id')
            ->where("peternak.id",$user->id)->first();
            return response()->json([
                'status' => 'ok',
                'message' => 'login Berhasil!',
                'data' => $user_d,
            ], 200);
        }
    }

    public function registerUser(Request $request){
        $validasi = validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $user = Peternak::create(array_merge($request->all(), [
            'password' => bcrypt($request->password),
            'is_admin' => 0
        ]));

        if ($user) {
            return response()->json([
                'success' => 1,
                'message' => 'Selamat, Registrasi Anda Berhasil!',
                'user' => $user
            ]);
        }
        return $this->error('Registrasi Gagal');
    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
