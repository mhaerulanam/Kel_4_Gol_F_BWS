<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $artikel = DB::table('artikel')->orderBy('tanggal', 'desc')->paginate(2);
        return view('frontend.home',compact('artikel'))->with('artikel', $artikel);
        // return view('frontend.home');
    }

    public function adminHome()
    {
        return view('admin-home');
    }
    public function petugasHome()
    {
        return view('petugas-home');
    }
}
