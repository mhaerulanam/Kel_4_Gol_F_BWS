<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puskeswan;

class ApiPuskeswanController extends Controller
{
    public function getAll() 
    {
        $puskeswan = Puskeswan::all();
        return response()->json($puskeswan, 201);
    }

    public function getPuskeswan($id) 
    {
        $puskeswan = Puskeswan::find($id);
        return response()->json($puskeswan, 200);
    }

    public function createPuskeswan(Request $request) 
    {
        Puskeswan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Puskeswan Berhasil Ditambahkan!'
        ], 201);
    }

    public function updatePuskeswan($id, Request $request) 
    {
        Puskeswan::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Puskeswan Berhasil Dirubah!'
        ], 201);
    }

    public function deletePuskeswan($id) 
    {
        Puskeswan::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Puskeswan Berhasil Dihapus!'
        ], 201);
    }
}
