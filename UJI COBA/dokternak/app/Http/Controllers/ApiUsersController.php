<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peternak;

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
}
