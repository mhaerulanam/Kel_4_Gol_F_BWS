<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{artikel, Cat};

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = Artikel::orderBy('tanggal', 'desc')->paginate(2);
        $getAnimals = Cat::all();

        return view('frontend.artikel',[
            'artikel' => $artikel,
            'animals' => $getAnimals,
            'count'     => DB::table('Artikel')->distinct('id_ktg')->count('id_ktg')
        ]);
        // return view('frontend.artikel');

        // mengirim data pegawai ke view index
		// return view('frontend.artikel',['artikel' => $artikel]);
    }

    public function cari(Request $request)
    {
        //Menangkap data pencarian
        $cari = $request->cari;

        //mengambul data dari tabel artikel sesuai pencarian data
        $artikel = DB::table('artikel')
        ->where('judul','like',"%".$cari."%")
        ->paginate(2);

        // menampilkan data hewan


        //mengirim data artikel ke view artikel
        return view('frontend.artikel',compact('artikel'));
    }

    public function detail($id) {
        $artikel2 = Artikel::orderBy('tanggal', 'desc')->paginate(2);
        $artikel = DB::table('artikel')->where('id_artikel',$id)->first();
        return view('frontend.detailartikel',compact('artikel','artikel2'));
    }

}
