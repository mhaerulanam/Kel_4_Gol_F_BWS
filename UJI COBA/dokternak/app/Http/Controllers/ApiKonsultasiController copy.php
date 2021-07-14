<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;
use Illuminate\Support\Facades\DB;

class ApiKonsultasiController extends Controller
{
    public function getAll($id) 
    {
        // $artikel = Artikel::all();
        $konsultasi = DB::table('konsultasi')
        ->join('dokter', 'dokter.id_dokter', '=', 'konsultasi.id_dokter')
        ->orderBy('tanggal','desc')
        ->where('konsultasi.id_peternak',$id)
        ->get();
        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Ditampilkan Semua',
            'data' => $konsultasi
        ], 201);
    }

    public function getDetailKonsultasi($id) 
    {
        $artikel = Konsultasi::find($id);
        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Ditampilkan per-item',
            'data' => $artikel
        ], 200);
    }

    public function tulisKonsultasi(Request $request) 
    {
        Konsultasi::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Ditambahkan!'
        ], 201);
    }

    public function deleteKonsultasi($id) 
    {
        Konsultasi::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Artikel Berhasil Dihapus!'
        ], 201);
    }
    
}
