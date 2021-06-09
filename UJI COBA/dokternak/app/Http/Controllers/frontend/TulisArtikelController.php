<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Models\Artikel;

class TulisArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = [
        //     'peternak' => Artikel::orderBy('id','desc')->get(),
        // ];
        $data = null;
        return view('frontend.tulisartikel',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $message = [
            'numeric' => ':attributer harus diisi nomor.'
        ];

        $validator = FacadesValidator::make($request->all(),[
            'judul' => 'required|string|max:100',
            'id_ktg' => 'required|string|max:15',
            'sumber' => 'required|string|max:100',
        ], $message)->validate();

        $role = 1;

        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' => $request->nama_penulis,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'sumber' => $request->sumber,
        ];

        Artikel::create($data_simpan);

        return redirect()->route('frontend.artikel')
                        ->with('success','Data peternak baru telah berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
