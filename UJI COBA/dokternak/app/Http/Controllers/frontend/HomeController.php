<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $artikel = DB::table('artikel')->orderBy('tanggal', 'desc')->paginate(2);
        return view('frontend.home',compact('artikel'))->with('artikel', $artikel);;
    }
}
