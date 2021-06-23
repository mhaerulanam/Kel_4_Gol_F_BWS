<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artikel;
use App\Models\KatArtikel;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DataArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::join('kategori_artikel_tabel', 'kategori_artikel_tabel.id_ktg', '=', 'artikel.id_ktg')
                    ->orderBy('id_artikel','desc')
                    ->get();
        // $artikel = Artikel::all();
        // $artikel = DB::table('artikel')
        //             ->join('kategori_artikel_tabel', 'kategori_artikel_tabel.id_ktg', '=', 'artikel.id_ktg')
        //             ->get();

        return view('backend.data_artikel.index',compact('artikel'));
        // return view('backend.peternak.index');
    }


    public function create()
    {
        $kategori = KatArtikel::all();
        return view('backend.data_artikel.create',compact('kategori'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal 15 huruf!!!',
            'max' => ':attribute URL harus diisi maksimal 100 huruf!!!',
            'mimes' => ':attribute harus berupa gambar dengan format (JPEG, PNG, dan SVG)',
        ];

        $validator = FacadesValidator::make($request->all(),[
            'judul' => 'required|string|min:15|max:100',
            'id_ktg' => 'required|string|max:15',
            'sumber' => 'required|string|min:15|max:200',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], $message)->validate();

        $status= "tampil";

        $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('data/data_artikel'), $getimageName);

        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' => $request->nama_penulis,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $getimageName,
            'sumber' => $request->sumber,
            'status' => $status,
        ];

        Artikel::create($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel baru telah berhasil disimpan, dimohon untuk menunggu konfirmasi dari Admin')
                        ->with('image',$getimageName);
    }
    public function edit($id)
    {
        $artikel = Artikel::where('id_artikel',$id)->first();
        return view('backend.data_artikel.create',compact('artikel'));
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

        $status= "tampil";

        $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('data/data_artikel'), $getimageName);
        $data_simpan = [
            'id_ktg' => $request->id_ktg,
            'tanggal' => $request->tanggal,
            'nama_penulis' => $request->nama_penulis,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $getimageName,
            'sumber' => $request->sumber,
            'status' => $status,
        ];

        Artikel::where('id_artikel', $id)->update($data_simpan);

        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $artikel = Artikel::where('id_artikel',$id)->delete();
        return redirect()->route('data_artikel.index')
                        ->with('success','Data artikel telah berhasil dihapus');
    }
}
