<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\artikel;
use App\Models\dokter;
use App\Models\puskeswan;
use App\Models\tutorial;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'dokter' => Dokter::orderBy('id_dokter', 'desc')->paginate(3),
            'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
            'tutorial' => Tutorial::orderBy('id_tutorial')->paginate(3),
        ];
        return view('frontend.home',compact('data'));
        // return view('frontend.home');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function lppetugas()
    {
        return view('petugas.home');
    }
}
