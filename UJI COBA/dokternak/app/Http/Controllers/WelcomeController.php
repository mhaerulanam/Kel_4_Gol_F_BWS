<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artikel;
use App\Models\dokter;
use App\Models\puskeswan;
use App\Models\tutorial;


class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'artikel' => DB::table('artikel')->join('kategori_artikel', 'kategori_artikel.id_ktg', '=', 'artikel.id_ktg')->paginate(2, ['*'], 'artikel'),
            'pencarian_dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->get(),
            'tutorial' => Tutorial::orderBy('id_tutorial')->paginate(4, ['*'], 'tutorial'),
            'dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->paginate(3, ['*'], 'dokter'),
        ];
        return view('welcome',compact('data'));
        // return view('frontend.home');
    }
}
