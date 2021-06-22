<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ApiArtikelController extends Controller
{
    public function getAll() 
    {
        $artikel = Artikel::all();
        return response()->json($artikel, 201);
    }

    public function getArtikel($id) 
    {
        $artikel = Artikel::find($id);
        return response()->json($artikel, 200);
    }

    public function createArtikel(Request $request) 
    {
        Artikel::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Ditambahkan!'
        ], 201);
    }

    public function updateArtikel($id, Request $request) 
    {
        Artikel::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Dirubah!'
        ], 201);
    }

    public function deleteArtikel($id) 
    {
        Artikel::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Dihapus!'
        ], 201);
    }
}
