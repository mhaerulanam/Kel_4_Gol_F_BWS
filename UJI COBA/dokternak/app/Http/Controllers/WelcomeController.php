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
            'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
            'tutorial' => Tutorial::orderBy('id_tutorial')->paginate(4),
            'dokter' => DB::table('dokter')->join('jabatan', 'jabatan.id_jabatan', '=', 'dokter.id_jabatan')->paginate(3),
        ];
        return view('welcome',compact('data'));
        // return view('frontend.home');
    }
}
