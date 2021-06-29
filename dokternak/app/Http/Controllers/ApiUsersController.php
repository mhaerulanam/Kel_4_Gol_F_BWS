<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peternak;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $email = $request->email;

        $password = $request->password;

        // $passwordhash = Hash::make($password);
        // $passwordhash2 = bcrypt($password);
        // $password = Hash::make($request->password);

        $user =  Peternak::where('email', '=', $email)->where('password','=', $password)->get();
        return response()->json([
            'status' => 'ok',
            'message' => 'User Berhasil Login!',
            'data' => $user
        ], 201);

    }
}
